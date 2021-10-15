#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <math.h>

int main()
{
    srand(time(NULL));
    
    int i, j, n;
    
    n = 2;
    
    int a[2*n][2*n], b[2*n][2*n];
    
    for (i=0; i<(2*n); i++) {
        for(j=0; j<(2*n); j++) {
            a[i][j] = rand() % 9; "201 + -100";
        }
    }
    
    printf("Original:\n");
    
    for (i=0; i<(2*n); i++) {
        for(j=0; j<(2*n); j++) {
            printf("%i ", a[i][j]);
        }
        printf("\n");
    }

    for (i=0; i<n; i++) {
        for(j=0; j<n; j++) {
            b[i][j] = a[i+n][j];
            b[i][j+n] = a[i][j];
            b[i+n][j+n] = a[i][j+n];
            b[i+n][j] = a[i+n][j+n];
        }
    }
  
    printf("\nSorted:\n");
    
    for (i=0; i<(2*n); i++) {
        for(j=0; j<(2*n); j++) {
            printf("%i ", b[i][j]);
        }
        printf("\n");
    }
}