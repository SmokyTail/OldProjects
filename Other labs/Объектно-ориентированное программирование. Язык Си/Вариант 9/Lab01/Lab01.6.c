#include <stdio.h>
#include <conio.h>
#include <math.h>

int main()
{
    float k, x;
    
    printf("k = ");
    scanf("%f", &k);
    
    printf("x = ");
    scanf("%f", &x);

    float pi=1, fact=1, i;
    
    for(i=1;i<=k;i++)
    {
        fact*=i;
        pi*=1 + sin(i*x)/fact;
    }
    
    printf("pi = %f",pi);
    
    return 0;
}