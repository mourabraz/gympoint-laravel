<h1 align="center">
  <img alt="Gympoint" title="Gympoint" src=".github/logo.png" width="200px" />
</h1>

<h3 align="center">
  Gympoint
</h3>

# Aplicação: Um monorepo do Gympoint com Laravel 7.x

Gynpoint é um aplicativo de gerenciamento de uma academia, com as seguintes características:

1. Os Administradores devem ser autenticar;
2. Um administrador pode cadastrar alunos, planos, matrículas e responder a questões dos alunos.
3. Os administradores tem acesso ao sistema pela web.
4. Sempre que uma matrícula é realizada um e-mail é enviado ao aluno com uma mensagem de boas vindas.
5. Sempre que uma resposta for dada à pergunta de um aluno o mesmo recebe um e-mail com a pergunta e a resposta.
   (6. Os alunos, por meio do aplicativo _mobile_ podem realizar o _checkin_ e enviar perguntas aos administradores.)
6. EXTRA: os administradores podem visualizar a quantidade de entradas dos alunos nos últimos 84 dias, bem como o gráfico dos horários mais utilizados. Uma lista com os aniversariantes dos próximos 30 dias pode ser obtida pelos administradores. Uma lista com alunos sem matrícula ativa também está disponível.

## Instalação e Inicialização

## Seeds

## Rotas

Junto segue o arquivo ([Insominia_2020-01-03.json](./Insominia_2020-01-03.json)) para importar as rotas para o [Insomnia](https://insomnia.rest/)

| Método | Rota                                  | Privado |                                                                                                       |
| :----: | :------------------------------------ | :-----: | ----------------------------------------------------------------------------------------------------- |
|  POST  | /sessions                             |   NÃO   | autenticação de usuário (administrador)                                                               |
|  GET   | /students/:student_id/checkins        |   NÃO   | lista as entradas de determinado aluno                                                                |
|  POST  | /students/:student_id/checkins        |   NÃO   | realiza a entrada de um aluno                                                                         |
|  GET   | /students/:student_id/help-orders     |   NÃO   | lista os pedido de ajuda criados por um aluno                                                         |
|  POST  | /students/:student_id/help-orders     |   NÃO   | cria um pedido de ajuda para um aluno                                                                 |
|  GET   | /dashboard/checkins/day               |   SIM   | lista a quantidade de entradas por dia nos últimos 84 dias (por default), ou pelo período solicitado  |
|  GET   | /dashboard/checkins/hour              |   SIM   | lista a quantidade de entradas por hora nos últimos 84 dias (por default), ou pelo período solicitado |
|  GET   | /dashboard/checkins/birthdays         |   SIM   | lista os aniversariantes (alunos) dos próximos 30 dias (por default)                                  |
|  GET   | /report/students/without/registration |   SIM   | lista de alunos que não possuam uma matrícula ativa                                                   |
|  GET   | /students                             |   SIM   | lista de alunos                                                                                       |
|  POST  | /students                             |   SIM   | cadastro de um aluno                                                                                  |
|  PUT   | /students/:id                         |   SIM   | atualização de um determinado aluno                                                                   |
| DELETE | /students/:id                         |   SIM   | exclui um determinado aluno                                                                           |
|  GET   | /plans                                |   SIM   | lista de planos                                                                                       |
|  POST  | /plans                                |   SIM   | cadastro de um plano                                                                                  |
|  PUT   | /plans/:id                            |   SIM   | atualização de um determinado plano                                                                   |
| DELETE | /plans/:id                            |   SIM   | exclui um determinado plano                                                                           |
|  GET   | /registrations                        |   SIM   | lista de matrículas                                                                                   |
|  POST  | /registrations                        |   SIM   | cadastro de uma matrícula                                                                             |
|  PUT   | /registrations/:id                    |   SIM   | atualização de uma determinada matrícula                                                              |
| DELETE | /registrations/:id                    |   SIM   | exclui uma determinada matrícula                                                                      |
|  GET   | /help-orders                          |   SIM   | lista de pedidos de auxílio                                                                           |
|  POST  | /help-orders/:help_order_id/answer    |   SIM   | cadastro a resposta a um determinado pedido de auxílio                                                |

## Testes

## Agradecimentos

Aos desenvolvedores e mantenedores das seguintes bibliotecas/frameworks:

-   [Laravel](https://laravel.com/);

## License

MIT © mourabraz@hotmail.com
