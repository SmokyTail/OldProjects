#include <stdio.h>
#include <conio.h>
#include <math.h>

int main()
{
    float a, b=4;
    
    printf("a = ");
    scanf("%f", &a);
    
    if (a<=-1)
    {
        b=(1/pow(a, 2));
        printf("f(a) = %f",b);
    }
    else if (a<2)
    {
        b=pow (a,2);
        printf("f(a) = %f", b);
    }
    else
    {

    printf("f(a) = %f", b);
    }
    return 0;
}