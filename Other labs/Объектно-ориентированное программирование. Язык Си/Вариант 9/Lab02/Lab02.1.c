#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <math.h>

int main()
{
    srand(time(NULL));
    
    int i, n, mas[n], s;
    
    n = 5;
    s = 0;
    
    printf("Original:\n");
    
    for (i = 0; i < n; i++) {
        mas[i] = rand() % 21 + -10;
        printf("%i ", mas[i]);
    }
    
    printf("\n\nSorted:\n");
    
    for (i = 0; i < n; i++) {
        if ((mas[i] != 0) && (mas[i] % 2 != 0) && (mas[i+1] != 0) && (mas[i+1] % 2 == 0)) {
            for (i = 0; i < n; i++) {
                mas[i] = abs(mas[i]);
            }
            s += 1;
        } else if (s == 0 && i == n-1) {
            for (i = 0; i < n; i++) {
                mas[i] = abs(mas[i]) * -1;
            }
        }
    }
    
    for (i = 0; i < n; i++) {
        printf("%i ", mas[i]);
    }

}