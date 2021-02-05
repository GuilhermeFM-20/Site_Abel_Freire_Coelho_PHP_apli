<?php
class Conexao{
    public $servido = "localhost";
    public $usuario = "root";
    public $senha = "";
    public $dbname = "professores";
  //----> 
  // Método de conexão
      public function conexaoAtri(){
        $cone = mysqli_connect($this->servido, $this->usuario, $this->senha, $this->dbname); 
        return $cone;  
      }
  //---->    
  // Métodos 
    public function verificaLogin($log, $sen){
    $query="SELECT Logi, Senha FROM administrador WHERE Logi = '$log' and Senha = '$sen'";
    $conex = mysqli_query($this->conexaoAtri(),$query);
    $rows = mysqli_num_rows($conex);
        if($rows == 1){
          $login = "SELECT * FROM administrador WHERE Logi = '$log'";
          $cone = mysqli_query($this->conexaoAtri(),$login);
          $row = mysqli_fetch_array($cone);
          $_SESSION['$login']= $row['Logi'];
          header("Location: Menu.php");
          }else{
            $_SESSION['veri'] = 1;
            header("Location: ../Admin.php");
          }   
    }
    public function formCads($name,$mater,$email,$sexo,$senha){
      $query ="INSERT INTO professores Values (DEFAULT,'$name','$mater','$email','$sexo','$senha')";
      $conex = mysqli_query($this->conexaoAtri(), $query);
      session_start();
      $_SESSION['suce'] = 1;
      header("Location: Menu.php"); 
    }
    public function veriExcPro($log, $sen){
      $query="SELECT email, Senha FROM professores WHERE email = '$log' and Senha = '$sen'";
      $conex = mysqli_query($this->conexaoAtri(),$query);
      $rows = mysqli_num_rows($conex);
          if($rows == 1){
            $quer = "DELETE FROM professores WHERE email = '$log' and Senha = '$sen'";
            $res = mysqli_query($this->conexaoAtri(),$quer);
            session_start();
            $_SESSION['suce'] = $res;
             header('Location: Menu.php');
            }else{
              $_SESSION['verio'] = 2;
              header("Location: Exclui.php");
            }   
      }
    public function excluProf($email, $senha){
    $quer = "DELETE FROM professores WHERE email = '$email' and Senha = '$senha'";
    mysqli_query($this->conexaoAtri(),$quer);
    session_start();
    $_SESSION['suce'] = 1;
    header('Location: Menu.php');
    exit();
    }
    public function veriEma($emai){
     $quer = "SELECT email FROM professores WHERE email = '$emai'";
     $cone = mysqli_query($this->conexaoAtri(),$quer);
     $rows = mysqli_num_rows($cone);
     return $rows;
    } 
    public function exibePro(){
      $lista = "SELECT * FROM professores ORDER BY nome";
      $resu = mysqli_query($this->conexaoAtri(),$lista);
      $i = 0;
      while($rows = mysqli_fetch_array($resu)){                 
        if($i > 2){
            echo "</tr> <tr>";
            $i = 1;
        }else{
            $i++;
        }
    
    echo '<td><div class="prof profw" style="margin: 10px; border-radius: 10px; border-color: rgb(172, 164, 164);
    border-style: solid;
    border-width: 1px;">';
    if($rows['sexo'] == 'Ma'){
        echo'<img src="../img/bg-img/professor.jpg" class="imgprof" style=" border-radius: 10px;"> <br><br>';      
    }elseif($rows['sexo'] == 'Fe'){
        echo'<img src="../img/bg-img/professora.jpg" class="imgprof" style=" border-radius: 10px;"><br><br>'; 
    }
    echo "<p>Nome do professor: ".$rows['nome']."</p>";
    echo "<p>Matéria do professor: ".$rows['materia']."</p>";
    echo "<p>Email: ".$rows['email']."</p>";
    echo '</div></td>';
    }
    }
    public function veriSenha($log,$sen){
      $query = "SELECT Logi,Senha FROM administrador WHERE Logi = '$log' and Senha = '$sen'";
      $cone = mysqli_query($this->conexaoAtri(),$query);
      $rows = mysqli_num_rows($cone);
      return $rows;
    }
    public function recaSen($sen, $emai){
      $query = "UPDATE professores SET Senha = '$sen' WHERE email = '$emai' ";
      $cone = mysqli_query($this->conexaoAtri(), $query);
    }
  //----> 
}