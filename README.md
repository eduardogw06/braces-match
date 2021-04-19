# Validar Caracteres
Escreva uma função que receba uma string contendo alguns caracteres e determine se a ordem é válida. Os caracteres considerados são representados da seguinte forma: (, ), {, }, [ ou ].

Para ser considerado válido a entrada da função deve seguir as seguintes condições:

Não deve conter caracteres incompatíveis;
Um caractere de abertura deve possuir seu respectivo caractere de fechamento;
Um subconjunto de caracteres deve ser uma sequencia válida de caracteres;
# Exemplos:
## Entradas Válidas:

- ()
- (){}[]
- {()}{}
- [{()}][(){}]

## Entradas Inválidas:

- (
- []{()
- [{)]
- {()}}{}