#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <math.h>

int main() {

    srand(time(NULL));

    int senha = rand() % 100 + 1;
    int num;

    do {

        printf("Digite um numero (1 - 100): ");
        scanf("%d", &num);

        int dif = abs(senha - num);
        int dif1 = senha - num;

        if (dif1 > 0) {
            printf("↑ ");
        }
        else if (dif1 < 0) {
            printf("↓ ");
        }

        if (dif <= 3) {
            printf("QUEIMANDO\n\n");
        }
        else if (dif <= 6) {
            printf("Bem quente\n\n");
        }
        else if (dif <= 9) {
            printf("Esquentando\n\n");
        }
        else {
            printf("Muito frio\n\n");
        }

    } while (num != senha);

    printf("\nCERTA RESPOSTA: %d\n", senha);

    return 0;
}