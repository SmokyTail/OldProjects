#include <stdio.h>
#include <conio.h>
#include <math.h>

int main()
{
    float a, sum=0, i=1;

    printf("a = ");
    scanf("%f", &a);
    
    do
    {
        sum+=1/i;
        i++;
    }
    while(a>=sum);
    
    printf("result = %f", sum);

    return 0;
}