#Sistema de Blog

##Problemática

Criar um sistema de blog para múltiplos autores, onde cada autor pode escrever postagens que vão para a página inicial. Ou seja, será um blog comunitário (não haverá um dono ou autor com mais destaque que outros). Cada autor terá login e senha para entrar no sistema.

Na página inicial deverá constar uma lista com todas categorias de postagens, bem como os títulos, data, autor e resumos das últimas 20 postagens. No fim da página, deve ser dado ao público paginações por onde poderão navegar por postagens anteriores. A lista de categorias apresentarão links para listas de postagens dessas mesmas categorias específicas seguindo as regras da página inicial.

No cadastro das postagens deverá conter título, resumo, texto completo, categoria a qual pertence e data de criação. O texto completo consistirá apenas de palavras, sem imagens, porém será necessário permitir o autor deixar partes do texto em negrito, itálico ou sublinhado, pelo menos.

Por ser o blog comunitário, qualquer autor poderá editar a postagens de outros autores, sabendo que ficará registrada a última pessoa que fez alteração na postagem e a data. O mesmo se aplica à deleção de postagens, porém nenhuma postagem será completamente apagada, somente não mais aparecerá para o público. Deverá ficar registrado o autor que desativou a publicação.

Na visualização da postagem todas as informações deverão estar visíveis, o título, texto completo, o nome do autor, a data de criação, e quando aplicável, a data e autor que alterou o conteúdo.

Não haverá possibilidade de o público comentar as postagens.

BloGamers

Equipe Allahu Akbar (Ailton Marques, Erikis André, Joel Alves e Lucas Emerick)

Linguagem PHP

Sublime Text Build 3126, NetBeans, Google Chrome

Frameworks e Dependências
Laravel 5.2, jQuery, Bootstrap, Summernote 0.8.2 e LaravelCollective

Descrição do processo de desenvolvimento (explicar detalhes de planejamento, execução e testes do sistema)
Primeira coisa a se pensar foi o desenvolvimento do modulo de autenticação, que o laravel já nós traz isso pronto para uso, logo após isso, foi pensando o banco de dados, tabelas e colunas, e implementado com a ajuda das migrações pré-existente no laravel, ela serve para migrar as tabelas para o banco sem utilizar scritps, com isso tudo, foi só criar os crud de categorias e posts (no caso dos posts, utilizei o summernote), e fazer os ajustes  para que os posts fiquem visiveis apenas para visualização quando o usuário estiver deslogado ou seja para o público ver, criada as paginações, uma lista com os posts desativados, e recebemos a ajuda do professor no finalzinho. (Muito grato!!)

Descrição do processo de compilação/implantação/execução do sistema a partir do código-fonte no repositório
Usando o xampp com servidor apache, phpmyadmin(mysql) e php, todas as etapas de processo foi utilizado o Google Chrome para a compilação, para compilação deste projeto, há um pequeno manual de instruções para instalar o projeto disponivel aqui neste repositorio, nesta branch (blog).