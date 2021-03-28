<?php 

namespace App\Model;

	class ProdutoDao{

		public function create(Produto $produto){
			$sql = "INSERT INTO produtos (nome, descricao) VALUES (?,?)";

			$stmt = Conexao::getConn()->prepare($sql);
			$stmt->bindValue(1, $produto->getNome());
			$stmt->bindValue(2, $produto->getDescricao());
			$stmt->execute();
		}

		public function read(){
			$sql = 'SELECT * FROM produtos';

			$stmt = Conexao::getConn()->prepare($sql);
			$stmt->execute();

			if ($stmt->rowCount() > 0) {
				$resultSet = $stmt->fetchAll(\PDO::FETCH_ASSOC);
				return $resultSet;
			}else{
				return [];
			}
			
		}

		public function update(Produto $produto){
			$sql = "UPDATE produtos SET nome = ?, descricao = ? WHERE id=?";

			$stmt = Conexao::getConn()->prepare($sql);
			$stmt->bindValue(1, $produto->getNome());
			$stmt->bindValue(2, $produto->getDescricao());
			$stmt->bindValue(3, $produto->getId());
			$stmt->execute();
		}

		public function delete($id){
			$sql = "DELETE FROM produtos WHERE id=?";

			$stmt = Conexao::getConn()->prepare($sql);
			$stmt->bindValue(1, $id);
			$stmt->execute();
		}
	}

 ?>