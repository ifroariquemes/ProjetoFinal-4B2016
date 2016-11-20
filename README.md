#Sistema de Fórum de Discussão

##Problemática

Criar um sistema para controlar fóruns de discussão. Os fóruns são fechados para acesso apenas por usuários cadastrados, porém qualquer pessoa pode se cadastrar no sistema usando seu nome real, nome de exibição, e-mail e senha.

Existem três tipos de usuários no sistema: (a) administrator, que pode gerenciar fóruns de discussão e fazer tudo que um moderador pode fazer; (b) moderador, que pode gerenciar threads de todos os usuários e fazer tudo que um usuário comum pode fazer; e (c) usuário comum, que pode apenas criar threads dentro de fóruns existentes, como também altera-los ou exclui-los. 

Um fórum é um ambiente que contextualiza uma discussão (ex.: carros, filmes). E esse fórum pode contém sub-fóruns que vão especializando o contexto (ex.: ford, terror). Portanto um fórum terá nome e identificação do fórum pai (se for derivado de algum).

Uma thread é uma nova discussão que será postada dentro de um fórum, iniciada por um usuário do sistema. Essa thread pode ser respondida por outros usuários e as respostas podem gerar réplicas, que também podem gerar réplicas, e assim sucessivamente. Todas as réplicas devem ficar aninhadas em suas respostas de origem. Outras informações sobre a thread que devem ficar disponíveis para o usuário são quantidade de respostas e data da última resposta. A ordenação das threads será pela data da última resposta ou data de postagem (caso não tenha alguma resposta ainda).

Um moderador poderá encerrar uma thread impedindo que os usuários continuem respondendo e até mesmo deletar respostas específicas, porém essas respostas constaram no sistema, mudando o texto para "[resposta deletada pela moderação]" quando isso acontecer.