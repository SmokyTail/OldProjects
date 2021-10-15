#include <stdio.h>
#include <conio.h>
#include <math.h>

int main()
{
    float x, y, z, a, b;
    printf("x = ");
    scanf("%f", &x);
    
    printf("y = ");
    scanf("%f", &y);
    
    printf("z = ");
    scanf("%f", &z);
    
    a=z+pow(x, 6)/4;
    
    if (a!=0)
    {
        a=fabs((x-pow(fabs(y), 0.5))*(x+y/a));
        if (a!=0)
        {
            a=pow(log(a), 0.2);
            printf("a = %f\n", a);
        }
        else
        {
            printf("SAD\n");
        }
    }
    else
    {
        printf("SAD\n");
    }
    
    float fact4, fact6, i;
    
    fact4=1;
    
    for(i=1; i<=4; i++)
    {
        fact4 = fact4*i;
    }
    
    fact6=1;
    
    for(i=1; i<=6; i++)
    {
        fact6 = fact6*i;
    }

    b=-x+pow(x, 2)/fact6-pow(x, 5)/fact6;
    
    printf("b = %f",b);
    
    return 0;
}