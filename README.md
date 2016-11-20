#Sistema de Chat

##Problemática

Criar um sistema que permita a troca de textos e emoticons entre usuários. O usuários criarão salas de bate papo ou então poderão entrar em salas criadas por outros usuários. Essas salas terão um nome único e terão um quantidade máxima de 255 participantes ou quanto seu criador desejar. O usuário que criar a sala também poderá colocar uma senha para entrar. Esta sala poderá ser deletada desde todos os presentes na sala concordem em fecha-la. 

Toda mensagem enviada na sala poderá ser lida por qualquer usuário que nela esteja. Um usuário só poderá estar em uma sala por vez. A sala deverá conter opção de enviar uma mensagem para apenas uma pessoa, e para isso uma lista com o nome dos usuários na sala deve ser exibida e atualizada constantemente.

Sempre que um usuário entrar ou sair da sala, uma mensagem deve ser enviadas a todos dessa sala informando do evento.

Acima da caixa de texto onde o usuário irá digitar a mensagem deverá conter uma lista com 10 emoticons diferentes que são imagens de carinhas que representam sentimentos. Ao clicar sobre a imagem o código que a representa deve ser incluso na mensagem no local onde está o cursor. O código terá prefixo ":" seguido do sentimento (como :feliz, deverá aparecer uma carinha feliz). O texto será enviado desta forma, porém ao ser exibido na tela, será mostrada a imagem ao invés do código.

Todas as mensagem devem ser registradas em um banco de dados contendo o nome da sala e as mensagens, além da data e hora de envio de cada mensagem.

Os usuários do chat deverão fazer um cadastro prévio para poder utilizar o sistema, colocando o apelido e uma senha para entrar.