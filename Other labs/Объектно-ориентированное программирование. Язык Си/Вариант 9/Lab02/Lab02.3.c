#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <math.h>

int main()
{
    srand(time(NULL));
    
    int i, k, j, n = 14, array[n], max = 0, min = 0;
    
    printf("Original:\n");
    
    for (i = 0; i < n; i++) {
        array[i] = rand() % 21 + -10;
        
        printf("%i ", array[i]);
    }
    
    /*printf("\nTest:\n");
    
    int mas[] = {16, 24, 12, 14, 15, 17, 12, 23, 45, 54, 13, 199, 21, 199};
    
    for (i = 0; i < n; i++) {
        array[i] = mas[i];
        
        printf("%i ", array[i]);
    }*/
    
    for (i = 0; i < n; i++) {
        if (array[max] < array[i]) {
            max = i;
        } else if ((array[max] == array[i]) && (max > i)) {
            max = i;
        }
    }
    
    for (i = 0; i < n; i++) {
        if (array[min] > array[i]) {
            min = i;
        } else if ((array[min] == array[i]) && (min < i)) {
            min = i;
        }
    }
    
    printf("\nMax: ");
    printf("%i   ", array[max]);
    printf("Min: ");
    printf("%i ", array[min]);
    
    if (max > min) {
        for(i=min+1;i<max;i++) {
            for(j=i+1;j<max;j++) {
                if(array[i]<array[j]) {
                    k=array[i];
                    array[i]=array[j];
                    array[j]=k;
                }
            }
        }
    } else {
        for(i=max+1;i<min;i++) {
            for(j=i+1;j<min;j++) {
                if(array[i]<array[j]) {
                    k=array[i];
                    array[i]=array[j];
                    array[j]=k;
                }
            }
        }
    }
    
    printf("\nSorted:\n");
    for (i = 0; i < n; i++) {
        printf("%i ", array[i]);
    }
}