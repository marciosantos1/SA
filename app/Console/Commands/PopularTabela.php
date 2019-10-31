<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App;

class PopularTabela extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:popular';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Preenche as tabelas';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        ########################################
        #######       CATEGORIAS     #############
        
        #TIPOS DE CATEGORIAS.
        $arrayCategorias [0] = "Livros";
        $arrayCategorias [1] = "Automóveis";
        $arrayCategorias [2] = "Roupas";
        
        foreach ($arrayCategorias as $cat) {
        $categoria = new App\Categoria();
        $categoria->nomcat = $cat;
        
        $categoria->save();}
        
        ########################################
        #######       CLIENTES     #############
        
        #CLIENTE 1
        $arrayClientes [0]['nome'] = "Ana souza";
        $arrayClientes [0]['cpf'] = 25874569874;
        $arrayClientes [0] ['endereco'] = "Rua: Alberto ito";
        $arrayClientes [0] ['numero'] = 234;
        $arrayClientes [0] ['bairro'] = "Maluche";
        $arrayClientes [0] ['cidade'] = "Brusque";
        $arrayClientes [0] ['uf'] = "Santa Catarina";
        $arrayClientes [0] ['telefone'] = 47988458665;
        
        #CLIENTE 2
        $arrayClientes [1]['nome'] = "Carlos Silva";
        $arrayClientes [1]['cpf'] = 89874569856;
        $arrayClientes [1] ['endereco'] = "Rua: Hernesto";
        $arrayClientes [1] ['numero'] = 567;
        $arrayClientes [1] ['bairro'] = "Azambuja";
        $arrayClientes [1] ['cidade'] = "Brusque";
        $arrayClientes [1] ['uf'] = "Santa Catarina";
        $arrayClientes [1] ['telefone'] = 47996658634;
        
        #CLIENTE 3
        $arrayClientes [2]['nome'] = "Geraldo Cardoso";
        $arrayClientes [2]['cpf'] = 54894569658;
        $arrayClientes [2] ['endereco'] = "Rua: Arnaldo Busatto";
        $arrayClientes [2] ['numero'] = 020;
        $arrayClientes [2] ['bairro'] = "Cedrinho";
        $arrayClientes [2] ['cidade'] = "Brusque";
        $arrayClientes [2] ['uf'] = "Santa Catarina";
        $arrayClientes [2] ['telefone'] = 47889658658;
    
        foreach ($arrayClientes as $cli){
        $cliente = new App\Cliente();
        $cliente->nomcli = $cli ['nome'];
        $cliente->cpfcli = $cli ['cpf'];
        $cliente->endcli = $cli ['endereco'];
        $cliente->numcli = $cli ['numero'];
        $cliente->baicli = $cli ['bairro'];
        $cliente->cidcli = $cli ['cidade'];
        $cliente->ufcli = $cli ['uf'];
        $cliente->telcli = $cli ['telefone'];
        
        $cliente->save();}
        #########################################
        
        ########################################
        #######       PRODUTOS     #############
        
        # PRODUTO 1   'cat 0'
        $arrayProdutos [0] ['nomeProduto'] = "As Aventuras de Peter Pan";
        $arrayProdutos [0] ['descricaoProduto'] = "Peter Pan, 1990, aventura, literatura infantil";
        $arrayProdutos [0] ['valorProduto'] = 49.90;
        $arrayProdutos [0] ['categoria'] = 1;
        
        ####################################################################
        
        # PRODUTO 1   'cat 1'
        $arrayProdutos [1] ['nomeProduto'] = "Astra";
        $arrayProdutos [1] ['descricaoProduto'] = "Chevrolet astra 2.0, 2009, completo, utilitário";
        $arrayProdutos [1] ['valorProduto'] = 28.900;
        $arrayProdutos [1] ['categoria'] = 2;
        
        # PRODUTO 2   'cat 1'
        $arrayProdutos [3] ['nomeProduto'] = "Sonic";
        $arrayProdutos [3] ['descricaoProduto'] = "Chevrolet sonic 1.6, 2010, completo, utilitário";
        $arrayProdutos [3] ['valorProduto'] = 30.900;
        $arrayProdutos [3] ['categoria'] = 2;
        
         ####################################################################
        
        # PRODUTO 1   'cat 2'
        $arrayProdutos [2] ['nomeProduto'] = "Camisa";
        $arrayProdutos [2] ['descricaoProduto'] = "Polo, tam: m, Azul Marinho";
        $arrayProdutos [2] ['valorProduto'] = 30.00;
        $arrayProdutos [2] ['categoria'] = 3;
        
        # PRODUTO 2   'cat 2'
        $arrayProdutos [4] ['nomeProduto'] = "Bermuda";
        $arrayProdutos [4] ['descricaoProduto'] = "Masculino, tam: m, Laranja";
        $arrayProdutos [4] ['valorProduto'] = 25.00;
        $arrayProdutos [4] ['categoria'] = 3;
        
        foreach ($arrayProdutos as $prod){
        $produto = new App\Produto();
        $produto->codcat = $prod ['categoria'];
        $produto->nompro = $prod ['nomeProduto'];
        $produto->despro = $prod ['descricaoProduto'];
        $produto->vlrpro = $prod ['valorProduto'];
       
        $produto->save();}
        #########################################
        
        
        
    }
}
