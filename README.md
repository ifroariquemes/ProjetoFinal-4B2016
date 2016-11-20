#Sistema de Provas Online

##Problemática

Criar um sistema que gerencia provas online e ranqueia os pontos que os alunos tiram nas atividades. Nesse sistema os administradores incluem perguntas em determinadas categorias. Então os alunos e solicitam a geração de uma prova para que respondam. O sistema corrige as questões na hora e mostra a pontuação obtida pelo aluno.

Cada resposta certa dá ao aluno (10 x **fator**) pontos . Se a pergunta ja foi respondida pelo aluno anteriormente então os pontos não serão creditados novamente.

Os administradores controlam o sistema cadastrando temas e perguntas. Quanto aos temas, será cadastrado o nome e o fator multiplicador para os pontos. Esse fator é como se fosse o nível de dificuldade: 0.8 para fácil, 1 para médio e 1.2 para difícil. O fator é utilizado no cálculo de pontos.

O cadastro da pergunta inclui o enunciado, o tema e 5 respostas possíveis. Também deve ser informado qual das respostas é a correta para correção automática. 

Quando um aluno entra no sistema usando seu login e senha, ele pode gerar provas com tema específico ou geral, informando o número de questões que deseja responder (o mínimo será 5 questões). Sua pontuação ficará registrada. Também terá acesso ao ranking de alunos mostrando o top 10 dos alunos com mais pontuação.

Sempre que o fator de multiplicação de um tema for alterado, a pontuação já obtida de todos os participantes também deve ser recalculada e informar a todos por e-mail.