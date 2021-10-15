#define _CRT_SECURE_NO_WARNINGS
#define _CRT_SECURE_NO_DEPRECATE
#define _CRT_NONSTDC_NO_DEPRECATE
#define NULL ((void *)0)
#pragma warning(disable : 4996)

#include <stdio.h>
#include <stdlib.h>
#include <string.h>

typedef struct {
    int size;
    char** keys;
    char** values;
} hash_t;

hash_t* HASH(int size) {
    hash_t* h = calloc(1, sizeof(hash_t));
    h->keys = calloc(size, sizeof(char*));
    h->values = calloc(size, sizeof(char*));
    h->size = size;
    return h;
}

int INDEX(hash_t* h, char* key) {
    int i = (int)key % h->size;
    while (h->keys[i] && h->keys[i] != key) {
        return NULL;
    }
    return i;
}

void INSERT(hash_t* h, char* key, char* value) {
    int i = INDEX(h, key);
    h->keys[i] = key;
    h->values[i] = value;

    // Проверка данных
    /*printf("\nCheck:\n");
    for (int j = 0; j < 40; j++) {
        char* KK = h->keys[j];
        char* VV = h->values[j];
        if (VV != NULL) {
            printf("%i Key: %s\n", j, &KK);
            printf("%i Value: %s\n", j, &VV);
        }
    }*/
}

void REMOVE(hash_t* h, char* key) {
    int i = INDEX(h, key);

    if (h->keys[i] && h->keys[i] == key) {
        h->keys[i] = NULL;
        h->values[i] = NULL;
    }
    
    // Проверка данных
    /*printf("\nCheck:\n");
    for (int j = 0; j < 40; j++) {
        char* KK = h->keys[j];
        char* VV = h->values[j];
        if (VV != NULL) {
            printf("%i Key: %s\n", j, &KK);
            printf("%i Value: %s\n", j, &VV);
        }
    }*/
}

void* FIND(hash_t* h, char* key) {
    int i = INDEX(h, key);
    char* FV = h->values[i];
    printf("%s\n", &FV);
}

int main()
{
    hash_t* h = HASH(50);

    FILE* CD;
    CD = fopen("CommandData.txt", "r");

    char* Key[50], * Value[50], Buff[100], * Line, Seg[10] = " ,()\"\n";

    while (fgets(Buff, 50, CD))
    {
        Line = strtok(Buff, Seg);

        if (strcmp(Line, "INSERT") == 0)
        {
            Line = strtok(NULL, Seg);
            int n = 0;
            if ((Line != NULL) && (strcmp(Line, "INSERT") != 0) && (strcmp(Line, "REMOVE") != 0) && (strcmp(Line, "FIND") != 0))
            {
                strcpy(Key, Line);
                n++;
                Line = strtok(NULL, Seg);
            }
            if ((Line != NULL) && (strcmp(Line, "INSERT") != 0) && (strcmp(Line, "REMOVE") != 0) && (strcmp(Line, "FIND") != 0))
            {
                strcpy(Value, Line);
                n++;
            }
            if (n == 2)
            {
                printf("INSERT:\nKey: %s\nValue: %s\n", Key, Value);
                INSERT(h, *Key, *Value);
                printf("------------------------------------------------------------------------------------------------------------------------\n");
            }
            else
            {
                printf("Wrong command! (INSERT)\n");
            }
        }
        else if (strcmp(Line, "REMOVE") == 0)
        {
            Line = strtok(NULL, Seg);
            if ((Line != NULL) && (strcmp(Line, "INSERT") != 0) && (strcmp(Line, "REMOVE") != 0) && (strcmp(Line, "FIND") != 0))
            {
                strcpy(Key, Line);
                printf("REMOVE:\nRemove key: %s\n", Key);
                REMOVE(h, *Key);
                printf("------------------------------------------------------------------------------------------------------------------------\n");
            }
            else
            {
                printf("Wrong command! (REMOVE)\n");
            }
        }
        else if (strcmp(Line, "FIND") >= 0)
        {
            Line = strtok(NULL, Seg);
            if ((Line != NULL) && (strcmp(Line, "INSERT") != 0) && (strcmp(Line, "REMOVE") != 0) && (strcmp(Line, "FIND") != 0))
            {
                strcpy(Key, Line);
                printf("FIND:\nSearch key: %s\n", Key);
                printf("Search value: ");
                FIND(h, *Key);
                printf("------------------------------------------------------------------------------------------------------------------------\n");
            }
            else
            {
                printf("Wrong command! (FIND)\n");
            }
        }
        else
        {
            printf("Commands not found!\n");
        }
        Line = strtok(NULL, Seg);
    }

    fclose(CD);

    return 0;
}