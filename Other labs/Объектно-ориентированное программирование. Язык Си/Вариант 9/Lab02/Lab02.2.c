#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <math.h>

int main()
{
    srand(time(NULL));
    
    int i, n, s;
    float mas[n], rang_i, rang_f, array[n];
    
    n = 10;
    
    printf("Original:\n");
    
    for (i = 0; i < n; i++) {
        rang_i = (rand() % 199999 + -99999) / powf(10, (rand() % 5));
        rang_f = rang_i - (int)rang_i;
        
        mas[i] = (rand() % 201 + -100) + rang_f;
        
        printf("%f ", mas[i]);
    }
    
    printf("\n\nSorted:\n");
    
    s = 1;
    
    for (i = 0; i < n; i++) {
        if (mas[i] > 0) {
            array[s] = mas[i];
            printf("%f ", array[s]);
            s += 1;
        }
    }
    
    for (i = 0; i < n; i++) {
        if (mas[i] < 0) {
            array[s] = mas[i];
            printf("%f ", array[s]);
            s += 1;
        }
    }
}