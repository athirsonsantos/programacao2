 <?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 28/02/18
 * Time: 13:38
 */

require_once "Conexao.php";
require_once "Categoria.php";

class CategoriaCrud
{
    private $conexao;

    public function __construct()
    {
        $con = new Conexao();
        $this->conexao = $con->getConexao();
    }

    public function getCategorias(){
        $sql = "SELECT * FROM categoria";

        //metodo para fazer uma consulta = query
        $categorias = $this->conexao->query($sql);

        //pegar os resultados da consulta
        //fetch=um array com todos os atributos o fetchall=array de array
        //fetch_assoc = array associativo
        $categorias = $categorias->fetchAll(PDO::FETCH_ASSOC);


        //inicio do array
        $listaCategorias = [];

        foreach ($categorias as $categoria){
            $cat = new Categoria();

            $cat->setDescricao($categoria['descricao_categoria']);
            $cat->setId($categoria['id_categoria']);
            $cat->setNome($categoria['nome_categoria']);

            $listaCategorias[] = $cat;
        }

        return $listaCategorias;
    }


    public function getCategoria(int $id){
        $sql = "SELECT * FROM categoria WHERE id_categoria = $id";

        $categoria = $this->conexao->query($sql);

        $categoria = $categoria->fetch(PDO::FETCH_ASSOC);

        $cat = new Categoria();

        $cat->setDescricao($categoria['descricao_categoria']);
        $cat->setId($categoria['id_categoria']);
        $cat->setNome($categoria['nome_categoria']);

    }

    public function insertCategoria(Categoria $categoria){
        $sql = "INSERT INTO 'categoria' ('nome_categoria', 'descricao_categoria') VALUES ('".$categoria->getNome()."', '".$categoria->getDescricao()."')";

        $categoria = $this->conexao->exec($sql);


    }

    public function updateCategoria(Categoria $categoria){
        $sql = "UPDATE categoria 
                SET nome_categoria = '{$categoria->getNome()}', descricao_categoria = '{$categoria->getDescricao()}'   
                WHERE id_categoria =$categoria->getId()";

        $categoria = $this->conexao->exec($sql);


}

    public function deleteCategoria($id){
        $sql = "DELETE FROM categoria WHERE $this->id_categoria == $id";
        $categoria = $this->conexao->exec($sql);


    }

}





