<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // -------- Material Escolar -----------

        $product = new Product();
        $product->name = 'Caneta';
        $product->description = 'Caneta Azul Bic';
        $product->save();
        $product->tags()->attach('1', ['amount' => 100]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Lápis';
        $product->description = 'Lápis Faber-Castle';
        $product->save();
        $product->tags()->attach('1', ['amount' => 250]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Giz de Cera';
        $product->description = 'Giz Preto Faber-Castle';
        $product->save();
        $product->tags()->attach('1', ['amount' => 50]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Borracha';
        $product->description = 'Borracha Staedtler';
        $product->save();
        $product->tags()->attach('1', ['amount' => 250]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Cola';
        $product->description = 'Cola Branca Cascorez';
        $product->save();
        $product->tags()->attach('1', ['amount' => 75]);

        //-----------------------------------------------
        //--------------Mesa/Banho------------------------
        //------------------------------------------------

        $product = new Product();
        $product->name = 'Roupão Infantil';
        $product->description = 'Roupão Adulto MicroFibra Manga Curta';
        $product->save();
        $product->tags()->attach('2', ['amount' => 10]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Toalha de Mesa';
        $product->description = 'Toalha de Mesa Dohler Athenas Natalinas (78cm x 78cm)';
        $product->save();
        $product->tags()->attach('2', ['amount' => 25]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Toalha de Lavabo';
        $product->description = 'Karseten Bruna II - Gramatura: 370 G/M²';
        $product->save();
        $product->tags()->attach('2', ['amount' => 22]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Roupão Adulto';
        $product->description = 'Roupão Adulto MicroFibra Manga Comprida ( Diversas Cores )';
        $product->save();
        $product->tags()->attach('2', ['amount' => 32]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Toalha de Rosto';
        $product->description = 'Toalha de Rosto Dohler - Gramatura: 360 G/m²';
        $product->save();
        $product->tags()->attach('2', ['amount' => 25]);

        //-----------------------------------------------
        //--------------Eletrodomésticos------------------------
        //------------------------------------------------

        $product = new Product();
        $product->name = 'Cooktop Fischer 4 bocas';
        $product->description = 'Gás 1519-5902 Branco Bivolt';
        $product->save();
        $product->tags()->attach('3', ['amount' => 3]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Micro-ondas LG';
        $product->description = 'Easy Clean MS3091BC 30L 800W Branco 110V';
        $product->save();
        $product->tags()->attach('3', ['amount' => 5]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Fogão Consul 5 bocas';
        $product->description = 'Preto com mesa de vidro e grades individuais de ferro fundido - CFS5VAE - Bivolt';
        $product->save();
        $product->tags()->attach('3', ['amount' => 4]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Smart Tv Philco 42"';
        $product->description = 'D-Led Full HD PTV42G10N5SKF Preto Bivolt';
        $product->save();
        $product->tags()->attach('3', ['amount' => 2]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Smartphone Motorola';
        $product->description = 'Moto E6I XT2053-5 32Gb Cinza Titanium';
        $product->save();
        $product->tags()->attach('3', ['amount' => 8]);

        //-----------------------------------------------
        //--------------Jardinagem------------------------
        //------------------------------------------------

        $product = new Product();
        $product->name = 'Rastelo';
        $product->description = 'Rasteo Para Folhas 8 Dentes';
        $product->save();
        $product->tags()->attach('4', ['amount' => 3]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Vassoura Plástica';
        $product->description = 'Vassoura Plástica Para Jardim Com Cabo - Cor: Vermelha';
        $product->save();
        $product->tags()->attach('4', ['amount' => 5]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Mangueira';
        $product->description = 'Grade em ferro fundido provençal sacada varanda 16x31 5cm   grade fabricada em ferro fundido usada em sacadas portões jardins corrimão de escadas e divisórias. Proporciona uma belíssima decoração pois possuem bom gosto e durabilidade. Utilize as grades para agregar...';
        $product->save();
        $product->tags()->attach('4', ['amount' => 4]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Grade Em Ferro Fundido';
        $product->description = 'D-Led Full HD PTV42G10N5SKF Preto Bivolt';
        $product->save();
        $product->tags()->attach('4', ['amount' => 2]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Vaso De Flor Para Parede ';
        $product->description = 'Meia Lua Jardim Vertical 4 Peças - Marrom';
        $product->save();
        $product->tags()->attach('4', ['amount' => 8]);

        //-----------------------------------------------
        //--------------Tecnologia/Eletronicos------------------------
        //------------------------------------------------

        $product = new Product();
        $product->name = 'Óculos Vr';
        $product->description = 'Óculos de Realidade Virtual Quest 2 - 256Gb, Cor:Branco';
        $product->save();
        $product->tags()->attach('5', ['amount' => 2]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Monitor Gamer';
        $product->description = 'Aoc Hero 27" Ips 144Hz 1Ms Fhd G-Sync VGA/HDMI';
        $product->save();
        $product->tags()->attach('5', ['amount' => 4]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Echo Dot';
        $product->description = 'Echo Dot (4ª Geração): Smart Speaker com Alexa - Cor Preta';
        $product->save();
        $product->tags()->attach('5', ['amount' => 10]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Fonte de Alimentação';
        $product->description = 'Fonte de Alimentação Para PC Bluecase BLU 350-K ATX 350W - Cor: Preta 115V/230V';
        $product->save();
        $product->tags()->attach('5', ['amount' => 5]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Notebook Samsung';
        $product->description = 'Notebook Samsung Book X30 cinza 15.6", Intel Core i5 1135G7 8GB de RAM 256GB SSD, Intel Iris Xe Graphics G7 80EUs 60 Hz 1920x1080px Windows 10 Home';
        $product->save();
        $product->tags()->attach('5', ['amount' => 4]);

        //-----------------------------------------------
        //------------------Pintura------------------------
        //------------------------------------------------

        $product = new Product();
        $product->name = 'Kit Pistola Pintura';
        $product->description = 'Kit Pistola Pintura Hvlp 600ml 2 Jogos Reparo 1.4 E 1.7mm';
        $product->save();
        $product->tags()->attach('6', ['amount' => 13]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Resina Epoxi';
        $product->description = 'Resina Epoxi Ohana Baixa Viscosidade C/ Endurecedor Kit1,5kg';
        $product->save();
        $product->tags()->attach('6', ['amount' => 10]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Kit De Pintura De Parede';
        $product->description = 'Kit De Pintura De Parede Completo Anti Respingo 5 Peças';
        $product->save();
        $product->tags()->attach('6', ['amount' => 8]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Filtro Para Pistola De Pintura';
        $product->description = 'Filtro Para Pistola De Pintura Universal - Mtx';
        $product->save();
        $product->tags()->attach('6', ['amount' => 17]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Rolo De Pintura De Parede';
        $product->description = 'Anti Respingo Com Reservatório';
        $product->save();
        $product->tags()->attach('6', ['amount' => 9]);

        //-----------------------------------------------
        //------------------Ferramentas em Geral------------------------
        //------------------------------------------------

        $product = new Product();
        $product->name = 'Serra Circular Elétrica';
        $product->description = 'Serra Circular Elétrica Philco PSC01 185mm 1500W azul-celeste 220V';
        $product->save();
        $product->tags()->attach('7', ['amount' => 5]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Kit Chaves Jogo Catraca';
        $product->description = 'Kit Chaves Jogo Catraca Reversível Soquetes 40 Peças Maleta';
        $product->save();
        $product->tags()->attach('7', ['amount' => 3]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Esmerilhadeira';
        $product->description = 'Esmerilhadeira angular Philco Force PEM01 azul 850 W 127 V';
        $product->save();
        $product->tags()->attach('7', ['amount' => 7]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Alicate Descascador';
        $product->description = 'Alicate Descascador De Fios 8mm - Prof. Gross 0,05 A 8,0mm
        ';
        $product->save();
        $product->tags()->attach('7', ['amount' => 15]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Furadeira Elétrica Parafusadeira ';
        $product->description = 'Furadeira elétrica parafusadeira Chevrolet GM3401 sem fio 1350rpm amarelo 110V/220V 12V';
        $product->save();
        $product->tags()->attach('7', ['amount' => 19]);

        //-----------------------------------------------
        //------------------Automotivos------------------------
        //------------------------------------------------

        $product = new Product();
        $product->name = 'Som Automotivo ';
        $product->description = 'Som automotivo Pioneer DEH S4280BT com USB e bluetooth';
        $product->save();
        $product->tags()->attach('8', ['amount' => 15]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Capas Automotivo';
        $product->description = 'Capas 100% Couro Automotivo Carro Fiat + Capa De Volante';
        $product->save();
        $product->tags()->attach('8', ['amount' => 3]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Tapetes Do Jetta';
        $product->description = 'Tapetes Do Jetta 2011 2012 2013 2014 2015 2016 2017 2018';
        $product->save();
        $product->tags()->attach('8', ['amount' => 15]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Antena Eletrica';
        $product->description = 'Antena Eletrica Interna Parabrisa Stetsom Star 900 Original';
        $product->save();
        $product->tags()->attach('8', ['amount' => 2]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Condicionador De Metais';
        $product->description = 'Condicionador De Metais Automotivo Motorkote 200ml';
        $product->save();
        $product->tags()->attach('8', ['amount' => 35]);

        //-----------------------------------------------
        //------------------Brinquedos------------------------
        //------------------------------------------------

        $product = new Product();
        $product->name = 'Kit 3 Brinquedo ';
        $product->description = 'Kit 3 Brinquedo Martelo Trovão Marreta Máscara Plástica Thor';
        $product->save();
        $product->tags()->attach('9', ['amount' => 20]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Carro Desportivo';
        $product->description = 'Carro Desportivo De Controle Remoto Art Brink GP Monte Carlo Lamborghini 1:18 - Cor:vermelho';
        $product->save();
        $product->tags()->attach('9', ['amount' => 23]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Carrinho Camaro';
        $product->description = 'Carrinho Camaro Transformers Vira Robô Luz Som Bate Volta F';
        $product->save();
        $product->tags()->attach('9', ['amount' => 21]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Boneca Nenem Menina';
        $product->description = 'Boneca Nenem Menina Coleção Hair Soft Super Macia Milk Toys';
        $product->save();
        $product->tags()->attach('9', ['amount' => 17]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Pista Para Carrinhos Hot Wheels';
        $product->description = 'Pista Para Carrinhos Hot Wheels Grande Cidade Gg 160cm Br71';
        $product->save();
        $product->tags()->attach('9', ['amount' => 35]);

        //-----------------------------------------------
        //------------------Móveis------------------------
        //------------------------------------------------

        $product = new Product();
        $product->name = 'Cozinha Compacta';
        $product->description = 'Cozinha Compacta 12 Portas 1 Gaveta C/ Tampo Clara - Poliman';
        $product->save();
        $product->tags()->attach('10', ['amount' => 2]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Guarda Roupa Casal';
        $product->description = 'Guarda Roupa Casal Com Espelho 3 Portas De Correr Lara Da';
        $product->save();
        $product->tags()->attach('10', ['amount' => 3]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Sapateira Organizador';
        $product->description = 'Sapateira Organizador Sapato Prateleira 12 Pares Desmontavel';
        $product->save();
        $product->tags()->attach('10', ['amount' => 2]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Estante';
        $product->description = 'Estante Aço Multi-uso 40cm 6 Prateleiras 30kg/prat Cinza';
        $product->save();
        $product->tags()->attach('10', ['amount' => 5]);

        //-----------------------------------------------

        $product = new Product();
        $product->name = 'Cadeira Escritório';
        $product->description = 'Cadeira Escritório Giratória 360º Total Preta Reclinável 155';
        $product->save();
        $product->tags()->attach('10', ['amount' => 4]);
    }
}
