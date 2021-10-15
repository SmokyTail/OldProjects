#include <stdlib.h>
#include <stdio.h>
#include <conio.h>
#include <string.h>

struct znak {
	char FN[100];
	char LN[100];
	char ZNAK[15];
	int DOB[2];
};

int main(void) {
    char zodiac[12][15] = {"Aquarius", "Pisces", "Aries", "Taurus", "Gemini", "Cancer", "Leo","Virgo", "Libra", "Scorpio", "Sagittarius", "Capricorn"};
	struct znak info[13];
	int i, stop;
	
	for (i=0; i<12; i++) {
		printf("First Name: ");
		scanf("%s", &info[i].FN);
		
		printf("Last Name: ");
		scanf("%s", &info[i].LN);
		
	    printf("Date of Birth (Day): ");
	    scanf("%i", &info[i].DOB[0]);
	    
	    printf("Date of Birth (Month): ");
	    scanf("%i", &info[i].DOB[1]);
	    
	    printf("Date of Birth (Year): ");
	    scanf("%i", &info[i].DOB[2]);
	    
	    printf("Zodiac signs: Aquarius (21.01-18.02)\nPisces (19.02-20.03)\nAries (21.03-19.04)\nTaurus (20.04-20.05)\nGemini (21.05-21.06)\nCancer (22.06-22.07)\nLeo (23.07-22.08)\nVirgo (23.08-23.10)\nLibra (23.09-23.10)\nScorpio (24.10.04-22.11)\nSagittarius (23.11-21.12)\nCapricorn (22.12-20.01)\nZodiac: ");
	    for (;;) {
            scanf("%s", &info[i].ZNAK);
            if ((strcmp(info[i].ZNAK, zodiac[0])==0) || (strcmp(info[i].ZNAK, zodiac[1])==0) || (strcmp(info[i].ZNAK, zodiac[2])==0) || (strcmp(info[i].ZNAK, zodiac[3])==0) || (strcmp(info[i].ZNAK, zodiac[4])==0) || (strcmp(info[i].ZNAK, zodiac[5])==0) || (strcmp(info[i].ZNAK, zodiac[6])==0) || (strcmp(info[i].ZNAK, zodiac[7])==0) || (strcmp(info[i].ZNAK, zodiac[8])==0) || (strcmp(info[i].ZNAK, zodiac[9])==0) || (strcmp(info[i].ZNAK, zodiac[10])==0) || (strcmp(info[i].ZNAK, zodiac[11])==0)) break;
            printf("Incorrect Zodiac sign!\nZodiac: ");
	    }
	    
	    printf("\nNext input - 1 | End input - 0\n");
	    for (;;) {
		    scanf("%i", &stop);
		    if ((stop == 0) || (stop == 1)) break;
		    printf("\nUse only '1' or '0'");
        }
        
		if (stop == 0) break;
	}
	
	char Month[12][15] = {"January", "February", "March", "April", "May", "June", "July","August", "September", "October", "November", "December"};
    int amount, j;
	
	for (;;) {
		printf("\nEnter the month number: ");
		scanf("%i", &amount);
		printf("\n%s:\n", Month[amount-1]);
		
		for (j=0; j <= i; j++) {
			if (info[j].DOB[1] == amount) {
				printf("%s %s | %s | %i.%i.%i\n", info[j].FN, info[j].LN, info[j].ZNAK, info[j].DOB[0], info[j].DOB[1], info[j].DOB[2]);
			}
		}
		
		if (amount == 0)	{
			printf("No results.\n"); 
		}
		
		printf("\nRepeat request - 1 | End - 0\n");
		for (;;) {
		    scanf("%i", &stop);
		    if ((stop == 0) || (stop == 1)) break;
		    printf("\nUse only '1' or '0'");
        }
		
		if (stop == 0) break;
	}
}