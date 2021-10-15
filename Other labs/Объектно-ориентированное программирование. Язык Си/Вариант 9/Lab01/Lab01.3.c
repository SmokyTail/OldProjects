#include <stdio.h>
#include <conio.h>
#include <math.h>

int main()
{
    int n, sum;
    
    printf("n = ");
    scanf("%d",&n);
    
    while (n>0)
    {
        sum+=n%10;
        n=n/10;
    }
    
    printf("sum = %d", sum);
    
    return 0;
}