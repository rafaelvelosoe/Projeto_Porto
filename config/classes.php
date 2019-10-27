<?php

class Banco_Terminal
{

	//Conexão com o banco de dados
	private $pdo;


	public function __construct($dbname, $host, $user, $senha)
	{
		try {
			$this->pdo = new PDO(
				"mysql:host=$host;dbname=$dbname;charset=utf8",
				$user,
				$senha,
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
			);
		} catch (PDOException $e) {
			echo 'Erro com banco de dados: ' . $e->getMessage();
			exit();
		} catch (Exception $e) {
			echo 'Erro Genérico: ' . $e->getMessage();
			exit();
		}
	}

	public function select_tb_terminal()
	{
		$res_lastId = array();
		$cmd = $this->pdo->query('SELECT * from tb_terminal;');
		$res_lastId = $cmd->fetchAll(PDO::FETCH_ASSOC);
		return $res_lastId;
	}

	public function select_Analise()
	{
		$res_lastId = array();
		$cmd = $this->pdo->query('SELECT  qt_previstaVagao, qt_previstoPeso, cd_operacao, nm_terminal, cd_entradaEsqDir, qt_capacidadeRodoviariaRec, qt_capacidadeFerroviariaRec, qt_capacidadeNavioExp, nm_tipoTerminal FROM tb_movimentacao 
		left join tb_periodohora ON tb_periodohora.cd_periodoHora = tb_movimentacao.cd_periodoHora
		left join tb_terminal ON tb_terminal.cd_terminal = tb_movimentacao.cd_terminal
		left join tb_categoriaTerminal On tb_categoriaTerminal.cd_categoria =  tb_terminal.cd_categoria
		left join tb_categoria On tb_categoriaTerminal.cd_categoria  =  tb_categoria.cd_categoria where tb_categoria.cd_categoria = 1;
');
		$res_lastId = $cmd->fetchAll(PDO::FETCH_ASSOC);
		return $res_lastId;
	}

	public function select_rodo()
	{
		$res_lastId = array();
		$cmd = $this->pdo->query('SELECT * FROM tb_movimentacao 
		left join tb_modal ON tb_modal.cd_modal = tb_movimentacao.cd_modal where tb_modal.cd_modal = 1;
');
		$res_lastId = $cmd->fetchAll(PDO::FETCH_ASSOC);
		return $res_lastId;
	}
	public function select_rodoDir()
	{
		$res_lastId = array();
		$cmd = $this->pdo->query('SELECT (select sum(qt_realizada) from tb_movimentacao left join tb_modal ON tb_modal.cd_modal = tb_movimentacao.cd_modal where tb_modal.cd_modal = 1 and cd_operacao = "D") as quantidade
		FROM tb_movimentacao 
		group by quantidade;
');
		$res_lastId = $cmd->fetchAll(PDO::FETCH_ASSOC);
		return $res_lastId;
	}
	public function select_rodoEsq()
	{
		$res_lastId = array();
		$cmd = $this->pdo->query('SELECT (select sum(qt_realizada) from tb_movimentacao left join tb_modal ON tb_modal.cd_modal = tb_movimentacao.cd_modal where tb_modal.cd_modal = 1 and cd_operacao = "E") as quantidade
		FROM tb_movimentacao 
		
		group by quantidade
				
					 ;
');
		$res_lastId = $cmd->fetchAll(PDO::FETCH_ASSOC);
		return $res_lastId;
	}

	public function select_ferroDir()
	{
		$res_lastId = array();
		$cmd = $this->pdo->query('SELECT (select sum(qt_realizada) from tb_movimentacao left join tb_modal ON tb_modal.cd_modal = tb_movimentacao.cd_modal where tb_modal.cd_modal = 2 and cd_operacao = "D") as quantidade
		FROM tb_movimentacao 
		
		group by quantidade
				
					 ;
');
		$res_lastId = $cmd->fetchAll(PDO::FETCH_ASSOC);
		return $res_lastId;
	}


	public function select_ferroEsq()
	{
		$res_lastId = array();
		$cmd = $this->pdo->query('SELECT (select sum(qt_realizada) from tb_movimentacao left join tb_modal ON tb_modal.cd_modal = tb_movimentacao.cd_modal where tb_modal.cd_modal = 2 and cd_operacao = "E") as quantidade
		FROM tb_movimentacao 
		
		group by quantidade
				
					 ;
');
		$res_lastId = $cmd->fetchAll(PDO::FETCH_ASSOC);
		return $res_lastId;
	}

	public function select_navioEsq()
	{
		$res_lastId = array();
		$cmd = $this->pdo->query('SELECT (select sum(qt_realizada) from tb_movimentacao left join tb_modal ON tb_modal.cd_modal = tb_movimentacao.cd_modal where tb_modal.cd_modal = 4 and cd_operacao = "E") as quantidade
		FROM tb_movimentacao 
		
		group by quantidade
				
					 ;
');
		$res_lastId = $cmd->fetchAll(PDO::FETCH_ASSOC);
		return $res_lastId;
	}
	public function select_navioDir()
	{
		$res_lastId = array();
		$cmd = $this->pdo->query('SELECT (select sum(qt_realizada) from tb_movimentacao left join tb_modal ON tb_modal.cd_modal = tb_movimentacao.cd_modal where tb_modal.cd_modal = 4 and cd_operacao = "E") as quantidade
		FROM tb_movimentacao 
		
		group by quantidade
				
					 ;
');
		$res_lastId = $cmd->fetchAll(PDO::FETCH_ASSOC);
		return $res_lastId;
	}

	public function select_ferro()
	{
		$res_lastId = array();
		$cmd = $this->pdo->query('SELECT (select sum(qt_realizada) as quantidade from tb_movimentacao where cd_modal = 1) as quantidade FROM tb_movimentacao 
		group by quantidade
			;
');
		$res_lastId = $cmd->fetchAll(PDO::FETCH_ASSOC);
		return $res_lastId;
	}
	public function select_navio()
	{
		$res_lastId = array();
		$cmd = $this->pdo->query('SELECT (select sum(qt_realizada) as quantidade from tb_movimentacao where cd_modal = 3) as quantidade FROM tb_movimentacao 
		group by quantidade
			;
				 
');
		$res_lastId = $cmd->fetchAll(PDO::FETCH_ASSOC);
		return $res_lastId;
	}

	// public function cadastrarMovimentacao($nm_terminal,$cd_entradaEsqDir,$nm_apelidoTerminal,$qt_capacidadeRodoviariaRec,$qt_capacidadeFerroviariaRec,$qt_capacidadeNavioRec,$cd_numeroTerminal,$qt_capacidadeRodoviariaExp, $qt_capacidadeFerroviariaExp,$qt_capacidadeNavioExp, $vl_armazem_nominal, $cd_categoria){
	// 	// $cmd=$this->pdo->prepare('SELECT nm__terminal FROM tb_terminal WHERE cd_terminal = :c');
	// 	// $cmd->bindValue(":c",$cd_terminal);
	// 	// $cmd->execute();
	// 	// if ($cmd->rowCount()>0) {//Conta quantas linhas resultou a busca
	// 	// 	return false;//Significa que já existe e pode cadastrar
	// 	// }else{
	// 	//Caso não, seguir cadastramento*/
	// 		$cmd=$this->pdo->prepare("INSERT INTO `mydb`.`tb_terminal` (`cd_terminal`, `nm_terminal`, `cd_entradaEsqDir`, `nm_apelidoTerminal`, `qt_capacidadeRodoviariaRec`, `qt_capacidadeFerroviariaRec`, `qt_capacidadeRodoFerroviariaRec`, `qt_capacidadeNavioRec`, `cd_numeroTerminal`, `qt_capacidadeRodoviariaExp`, `qt_capacidadeFerroviariaExp`, `qt_capacidadeRodoFerroviariaExp`, `qt_capacidadeNavioExp`, `vl_armazem_nominal`, `cd_categoria`)  VALUES('',:a,:b,:d,:e,:f,:g,:h,:j,:k,:m,:n, :o, :p)");

	// 		$cmd->bindValue(":b",$nm_terminal);
	// 		$cmd->bindValue(":d",$cd_entradaEsqDir);			
	// 		$cmd->bindValue(":e",$nm_apelidoTerminal);
	// 		$cmd->bindValue(":f",$qt_capacidadeRodoviariaRec);
	// 		$cmd->bindValue(":g",$qt_capacidadeFerroviariaRec);
	// 		$cmd->bindValue(":h",$qt_capacidadeNavioRec);
	// 		$cmd->bindValue(":j",$cd_numeroTerminal);
	// 		$cmd->bindValue(":k",$qt_capacidadeRodoviariaExp);
	// 		$cmd->bindValue(":m",$qt_capacidadeFerroviariaExp);
	// 		$cmd->bindValue(":n",$qt_capacidadeNavioExp);
	// 		$cmd->bindValue(":o",$vl_armazem_nominal);
	// 		$cmd->bindValue(":p",$cd_categoria);
	// 		$cmd->execute();

	// 		// $cmd=$this->pdo->prepare("INSERT INTO tb_endereco (qt_capacidadeNavioRec) VALUES(:a)");
	// 		// $cmd->bindValue(":a",$qt_capacidadeNavioRec);
	// 		// $cmd->execute();

	// 		return true;
	// 	// }
	// }

}
