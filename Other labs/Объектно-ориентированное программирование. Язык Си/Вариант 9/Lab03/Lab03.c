#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

int main()
{
    FILE *inp, *out;
    
    int len = 0, size = 4;
    int *a = (int *) malloc(size * sizeof(int));
    int v, x;
    
    inp=fopen("INPUT.txt", "r");
        if (!inp) {
    		printf("FILE OPEN ERROR!"); 
    		return 0;
	    }
	    printf("File INPUT.txt successfully opened!\n");
        while (fscanf(inp, "%i", &v)!=EOF) {
            if (len == size) {
                size *= 2;
                a = (int *) realloc(a, size * sizeof(int));
                if (a == NULL) {
                    printf("Bad alloc");
                    return 0;
                }
            }
            a[len++] = v;
        }
    fclose(inp);
    
    for (int i=0; i<len; i++){
        printf("%i\n", a[i]);
    }
    
    for (int i=0; i<len; i++){
        if (a[i]<0){
            len--;
            x = a[i];
            for (i; i<len; i++){
                a[i] = a[i+1];
            }
            printf("The first negative element has been DESTROYED! ");
            printf("%i\n", x);
            break;
        }
    }
    
    out = fopen("OUTPUT.txt","w");
        if (!out) {
        	printf("FILE OPEN ERROR!");
        	return 0;
        }
        printf("File OUTPUT.txt successfully opened!\n");
        for (int i=0; i<len; i++)	{
        	fprintf(out, "%i ", a[i]);
        }
        printf("Transfer data to a file OUTPUT.txt\n");
    fclose(out);
    
    free(a);
}