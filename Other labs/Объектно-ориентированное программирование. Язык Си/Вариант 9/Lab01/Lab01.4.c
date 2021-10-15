#include <stdio.h>
#include <conio.h>
#include <math.h>

int main()
{
    int n,result;
    
    result=0;
    
    do
    {
        printf("n = ");
        scanf("%d", &n);
        result+=1;
    }
    while (n!=0);
    
    result=(result)/2;
    
    printf("result = %d", result);
    
    return 0;
}