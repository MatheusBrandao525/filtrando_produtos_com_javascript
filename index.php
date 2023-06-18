<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Exemplo de Filtro</title>
</head>
<body>
    
    <section class="content">
        <p style="display: flex; justify-content:center; text-align:center; font-size:2rem; font-weight:bold; margin-bottom:1rem;">Filtar Produtos</p>
        <ul class="filter">
            <li class="item active" data_filter="todos">Todos</li>
            <li class="item" data_filter="0-100">0-100</li>
            <li class="item" data_filter="100-200">100-200</li>
            <li class="item" data_filter="300-400">300-400</li>
            <li class="item" data_filter="500-600">500-600</li>
            <li class="item" data_filter="600-700">600-700</li>
        </ul>

        <ul class="itens">
            <li class="item 0-100"><img src="img/car-1.png" alt=""></li>
            <li class="item 0-100"><img src="img/car-2.png" alt=""></li>
            <li class="item 100-200"><img src="img/car-3.png" alt=""></li>
            <li class="item 100-200"><img src="img/car-4.png" alt=""></li>
            <li class="item 200-300"><img src="img/car-5.png" alt=""></li>
            <li class="item 200-300"><img src="img/car-6.png" alt=""></li>
            <li class="item 300-400"><img src="img/car-7.png" alt=""></li>
            <li class="item 300-400"><img src="img/car-8.png" alt=""></li>
            <li class="item 500-600"><img src="img/vehicle-2.png" alt=""></li>
            <li class="item 500-600"><img src="img/vehicle-3.png" alt=""></li>
            <li class="item 600-700"><img src="img/vehicle-5.png" alt=""></li>
            <li class="item 600-700"><img src="img/vehicle-6.png" alt=""></li>
        </ul>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script>
    $(document).ready(function(){

        // Adiciona um evento ao usuario clicar no elemento
        $('.filter .item').click(function(){

            // Adiciona e remove a class active do elemento
            $(this).addClass("active").siblings().removeClass("active");

            // Efeito visual de fade com atraso
            $(".itens").fadeOut();
            setTimeout(function(){
                $(".itens").fadeIn();
            }, 400);

            // Valor do data-filter
            let value = $(this).attr("data_filter");

            // Tempo de exibisão dos registros com atraso
            setTimeout(function(){
                if(value === 'todos'){
                    $(".itens .item").show('500');
                }else{
                    $(".itens .item").not("." + value).hide("500");
                    $(".itens .item").filter("." + value).show("500");
                }
            });

            // Teste para saber se está retornando o valor do data-filter
            console.log(value);
        });
    });
</script>


</body>
</html>