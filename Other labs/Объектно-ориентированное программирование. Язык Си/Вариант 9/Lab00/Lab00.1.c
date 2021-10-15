#include <stdio.h>

#include <math.h>

int main()
{
    printf("Hello, world...\n");

    float a, b, c;

    printf("a = ");
    scanf("%f",&a);
    
    printf("b = ");
    scanf("%f",&b);
    
    c=cos(a)*(2*sin(b));

    printf("c = %f\n",c);
    
    printf("Za Wārudo!");
    
    return 0;
}