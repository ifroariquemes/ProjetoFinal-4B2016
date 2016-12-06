#Sistema de Lista de Desejos

##Problemática

Criar um sistema de lista de desejos para uma loja de informática. Consiste em um catálogo de produtos em que o usuário fará pesquisas e indicará vários produtos que deseja comprar. No final o usuário pede para salvar a lista informando seu e-mail. O sistema então enviará um e-mail para o usuário contendo dos os itens da lista e o valor, além de salvar os dados da lista no banco de dados para que o lojista entre em contato com o usuário posteriormente.

Para que isto seja possível, será necessário criar (a) **cadastro de categorias**, contendo seu nome, porém uma categoria pode ter sub-categorias; (b) **cadastro de produtos**, contendo nome, valor, descrição, categoria e fotos; (c) **cadastro de listas de desejos** contendo os dados do usuário e os itens marcados por ele, sendo os dados do usuário o nome, telefone e e-mail.

Na página inicial deve constar as categorias para que o usuário possa navegar pelo produtos desta categoria, e um campo de busca para que a pesquisa seja iniciada pelo nome desse produto, além de alguns produtos selecionados aleatoriamente do banco de dados.

Além dos cadastros, o lojista poderá visualizar a qualquer momento um relatório dos 10 itens mais desejados do mês e os 10 mais desejados de sempre. Esse sistema de administração de cadastro e relatório deve ser protegido por senha ao cadastrar administradores no sistema.

**A função de e-mail deverá funcionar de verdade na correção desse sistema!**

PASSO A PASSO PARA EXECUÇÃO DO PROEJTO DESEJOS

1 - VOCÊ PRECISA TER O MY SQL INSTALADO EM SEU COMPUTADOR, CASO NÃO POSSUA BAIXE DO SITE https://dev.mysql.com/downloads/mysql/5.6.html, EM CASO DE POSSUIR  MY SQL INSTALADO IGNORE ESTA ETAPA. 

2 - EXECUTE OS CÓDIGO DOS ARQUIVOS FÍSICO FINAL E INSERTS FINAL CONTIDOS NA PASTA ARQUIVOS DE CÓDIGO-FONTE EM SEU MY SQL.

3 - EM CASO DE CONFIGURAÇÕES DIFERENTES DE USERNAME ROOT E PASSWORD ROOT, ALTERE PARA SEU USUÁRIO E SENHA NO ARQUIVO CONFIG.PHP QUE ESTÁ DENTRO DAS PASTAS ARQUIVOS DE CÓDIGO FONTE->APPLICATION->CONFIG. EM CASO DE POSSUIR OS MESMOS USUÁRIO E SENHA IGNORE ESTA ETAPA.

4 - EXECUTE O XAMPP, INICIE O APACHE E O MYSQL CASO NÃO JÁ TENHA FEITO. EM CASO DE JÁ INICIADOS, IGNORE ESTA ETAPA.

5 - APÓS ESTES PASSOS, EXECUTE A APLICAÇÃO

