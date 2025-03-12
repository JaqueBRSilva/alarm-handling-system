# Criar um sistema de cadastro e manipulação de alarmes relacionados a equipamentos.

### Itens da aplicação
- Cadastro de equipamentos (CRUD)
- Cadastro de Alarmes (CRUD)
- Interface para manipulação de alarmes.
    - Ativar/Desativar Alarmes
    - Verificar os Alarmes atuados

## Regras
- ### Campos mínimos para "Equipamentos":
    - Nome do equipamento;
    - Número de Série;
    - Tipo (Tensão, Corrente e Óleo);
    - Data de cadastro.

- ### Campos mínimos para "Alarmes":
    - Descrição do alarme;
    - Classificação (Urgente, Emergente e Ordinário) ;
    - Equipamento relacionado;
    - Data de cadastro.

- ### Campos mínimos na Visualização de "Alarmes atuados":
    - Data da entrada;
    - Data da saída;
    - Status do alarme;
    - Descrição do alarme;
    - Descrição do equipamento

- ### Interface para manipulação dos alarmes · "Verificar os Alarmes atuados":
    - Possibilitar ordenação dos alarmes pelas colunas de exibição.
    - Filtrar o conteúdo pela descrição do alarme.
    - Indicar os 3 alarmes que mais atuaram no sistema.

## Complementares:
- Registrar todas as ações efetuados no sistema.
- Interface para manipulação dos alarmes - Ativar/Desativar Alarmes:
    - Não deve ser possível ativar um alarme com o status "on" e nem
desativar um alarme com status "off";
    - Quando ativar um alarme com a classificação urgente, deve enviar um e-mail para “abcd@abc.com.br”

## Observação:
1. Importante utilizar o mínimo possível de Scaffolding (geração automatizada de código), pois o objetivo do teste é analisar o seu conhecimento e organização para codificação.

2. O desafio deve ser entregue com PHP, Bootstrap, JavaScript e MySql, mas apenas a nível de conhecimento, aqui trabalhamos com PHP, Bootstrap, JavaScript, CodeJs, React, MySql, Postgres, Redis, MongoDb, TypeScript, Testes TDD.

3. Questões tecnológicas/frameworks, ficam a sua escolha (sugerimos você utilizar o que mais conhece).

4. Os arquivos podem ser enviados compactados ou em plataformas como o GitHub.