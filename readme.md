# Lista de Exercícios de PHP com Condicionais

### 1. Menor de Três Números

Faça um programa que leia 3 números inteiros e apresente o menor deles.

### 2. Maior de Três Números

Faça um programa que leia 3 números inteiros e apresente o maior deles.

### 3. Par ou Ímpar

Faça um programa que leia um número e mostre se ele é par ou ímpar.

### 4. Soma Par ou Ímpar

Faça um programa que leia 3 números e mostre se o valor de sua soma é par ou ímpar.

### 5. Ano Bissexto

Faça um programa que determine se um determinado ano lido é bissexto. Sendo que um ano é bissexto se for divisível por 400 ou se for divisível por 4 e não for divisível por 100. Ex: 1988, 1992, 1996.

### 6. Empréstimo

Faça um programa que receba o salário de um trabalhador e o valor da prestação de um empréstimo, se a prestação for maior que 20% do salário imprima: “Empréstimo não concedido”, caso contrário imprima: “Empréstimo concedido”.

### 7. Função de 1º Grau

Faça um programa que calcule e exiba o resultado de uma função de 1º Grau `f(x) = ax + b`.

### 8. Função de 2º Grau

Faça um programa que calcule e exiba os resultados de uma função de 2º Grau `f(x) = ax^2 + bx + c`.

### 9. IMC

Faça um programa que receba o peso e a altura de um usuário e calcule o IMC (índice de massa corpórea). O IMC é definido por `peso/(altura^2)`. Escreva no console a situação do paciente baseada na tabela abaixo:

| Cálculo IMC            | Situação                                    |
|------------------------|---------------------------------------------|
| Abaixo de 18,5         | Você está abaixo do peso ideal              |
| Entre 18,5 e 24,9      | Parabéns — você está em seu peso normal!    |
| Entre 25,0 e 29,9      | Você está acima de seu peso (sobrepeso)     |
| Entre 30,0 e 34,9      | Obesidade grau I                            |
| Entre 35,0 e 39,9      | Obesidade grau II                           |
| 40,0 e acima           | Obesidade grau III                          |

### 10. Divisível por 2 e 5

Faça um programa que leia um número, calcule e exiba se ele é divisível por 2 e 5.

### 11. Categoria do Nadador

Elabore um programa em que dada a idade de um nadador classifique-o em uma das seguintes categorias:

- Infantil A = 5 - 7 anos
- Infantil B = 8 - 10 anos
- Juvenil A = 11-13 anos
- Juvenil B = 14-17 anos
- Adulto = maiores de 18 anos

OBS: A idade fornecida pelo usuário deve estar entre 0 e 120 anos. Caso contrário, o programa deve emitir uma mensagem de erro.

### 12. Média de Notas Válidas

Faça um programa que calcule a média entre 3 notas se e somente se essas notas forem válidas. Uma nota é considerada válida se ela for maior ou igual a zero e menor ou igual a cem (0 <= nota <= 100).

### 13. Verificação de Valores Inteiros e Positivos

Faça um programa que leia 3 valores e verifique se todos são inteiros e positivos, em seguida exiba quais deles são inteiros ou não e positivos ou negativos.

### 14. Média e Situação do Aluno

Faça um programa que leia 3 notas, calcule a média aritmética se e somente se, são notas válidas. Em seguida, exiba a situação do aluno (aprovado se média maior ou igual a 70 ou reprovado caso contrário).

| Média    | Situação        |
|----------|-----------------|
| Média >= 70 | Aprovado     |
| Média < 40  | Reprovado     |
| Média < 70 e Média >= 40 | Em recuperação |

### 15. Triângulo Retângulo

Faça um programa que leia 3 valores a, b e c, inteiros e positivos, verifique se esses valores formam um triângulo retângulo. Lembre-se do Teorema de Pitágoras que diz: “Em qualquer triângulo retângulo, o quadrado do comprimento da hipotenusa é igual à soma dos quadrados dos comprimentos dos catetos.”

### 16. Nome do Mês

Faça um programa que leia o número que corresponde a um mês e escreva o nome correspondente. Por exemplo, 1 representa janeiro, 2 fevereiro e assim por diante.

### 17. Calcular Hipotenusa

Sabendo que T é um triângulo retângulo, faça um programa que solicite ao usuário os valores de 2 catetos. Calcule o valor da hipotenusa.

### 18. Turno de Estudo

Faça um programa que pergunte em que turno você estuda. Peça para digitar M-matutino ou V-Vespertino ou N- Noturno. Imprima a mensagem "Bom Dia!", "Boa Tarde!" ou "Boa Noite!", respectivamente, ou "Valor Inválido!", conforme o caso.

### 19. Dia da Semana

Faça um Programa que leia um número e exiba o dia correspondente da semana. (1-Domingo, 2-Segunda, etc.), se digitar outro valor deve aparecer valor inválido.

### 20. Folha de Pagamento

Faça um programa para calcular uma folha de pagamento, sabendo que os descontos são do Imposto de Renda, que depende do salário bruto (conforme tabela abaixo) e 3% para o Sindicato e que o FGTS corresponde a 11% do Salário Bruto, mas não é descontado (é a empresa que deposita). O Salário Líquido corresponde ao Salário Bruto menos os descontos. O programa deverá pedir ao usuário o valor da sua hora e a quantidade de horas trabalhadas no mês.

#### Desconto do IR

- Salário Bruto até 900 (inclusive) - isento
- Salário Bruto até 1500 (inclusive) - desconto de 5%
- Salário Bruto até 2500 (inclusive) - desconto de 10%
- Salário Bruto acima de 2500 - desconto de 20%

### 21. Custo das Laranjas

Laranjas custam R$ 1,30 cada se forem compradas menos de uma dúzia, e R$ 1,00 se forem compradas pelo menos 12. Escreva um programa que leia o número de laranjas compradas, calcule e escreva o custo total da compra.

### 22. Verificar Idade para Votação

Faça um programa que leia o ano atual e o ano de nascimento de uma pessoa e em seguida exiba uma mensagem que diga se ela poderá ou não votar este ano (não é necessário considerar o mês em que a pessoa nasceu).

### 23. Resultado de Jogo de Futebol

Faça um programa que leia o nome de 2 times e o número de gols marcados na partida (para cada time). Escrever o nome do vencedor. Caso não haja vencedor deverá ser impressa a palavra EMPATE.

### 24. Comparação de Dois Números

Faça um programa que leia dois valores e imprima uma das três mensagens a seguir: “Números iguais” – caso os números sejam iguais, “Primeiro é maior” – caso o primeiro seja maior que o segundo, “Segundo maior” – caso o segundo seja maior que o primeiro.
