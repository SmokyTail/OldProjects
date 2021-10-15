#define _CRT_SECURE_NO_WARNINGS
#define _CRT_SECURE_NO_DEPRECATE
#define _CRT_NONSTDC_NO_DEPRECATE
#define NULL ((void *)0)
#pragma warning(disable : 4996)

#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

int PE() {
    printf("\n\nPress ENTER to continue.");
    getchar();
    getchar();
}


int DEA(int GenType, int len, int size, int** a, int* ln, int* sz) {
    if (GenType == 1) {
        int UrLen, elem;

        printf("\nEnter the length of the dynamic expandable array: ");
        scanf("%i", &UrLen);

        for (int i = 0; i < UrLen; i++) {
            printf("Enter number: ");
            scanf("%i", &elem);
            if (len == size) {
                size *= 2;
                a = (int*)realloc(a, size * sizeof(int));
            }

            a[len] = elem;
            len++;
        }

        printf("\nCreated dynamic expandable array: { ");
        for (int i = 0; i < len; i++) {
            printf("%d ", a[i]);
        }
        printf("}");
    }
    else if (GenType == 2) {
        len = 50000000;
        clock_t t0, t1; // ВРЕМЯ
        t0 = time(0); // ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ
        while ((len == size) || (len > size)) {
            size *= 2;
            a = (int*)realloc(a, size * sizeof(int));
        }

        printf("\nGenerated array: { ");
        for (int i = 0; i < len; i++) {
            a[i] = rand() % 100;
            /*printf("%i ", a[i]);*/
        }
        printf("}");
        t1 = time(0); // ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ
        double time_in_seconds = difftime(t1, t0); // ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ
        printf("\nTime elapsed in sec: %f", time_in_seconds); // ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ

    }

    *(ln) = len;
    *(sz) = size;
    int* p = a;

    return p;
}


typedef struct _Node {
    void *data;
    struct _Node *next;
    struct _Node *prev;
} Node;

typedef struct _DblLinkedList {
    size_t index;
    Node *head;
    Node *tail;
} DblLinkedList;

DblLinkedList* CreateDLL() {
        DblLinkedList* tmp = (DblLinkedList*)malloc(sizeof(DblLinkedList));
        tmp->index = 0;
        tmp->head = tmp->tail = NULL;
        return tmp;
}

int DLL(int GenType, DblLinkedList* list) {
    int UrLen, elem;
    clock_t t0, t1; // ВРЕМЯ    
    if (GenType == 1) {
        printf("\nEnter the length of the doubly linked list: ");
        scanf("%i", &UrLen);

        for (int i = 0; i < UrLen; i++) {

            printf("%i element: ", i + 1);
            scanf("%i", &elem);

            Node* tmp = (Node*)malloc(sizeof(Node));
            if (tmp == NULL) {
                exit(1);
            }

            tmp->data = elem;
            tmp->next = NULL;
            tmp->prev = list->tail;

            if (list->tail) {
                list->tail->next = tmp;
            }
            list->tail = tmp;

            if (list->head == NULL) {
                list->head = tmp;
            }
            list->index++;
        }

        printf("\nCreated doubly linked list: { ");
    }
    else if (GenType == 2) {
        srand(time(0));
        UrLen = 30000000;
        t0 = time(0); // ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ
        for (int i = 0; i < UrLen; i++) {
            elem = rand() % 100;

            Node* tmp = (Node*)malloc(sizeof(Node));
            if (tmp == NULL) {
                exit(1);
            }

            tmp->data = elem;
            tmp->next = NULL;
            tmp->prev = list->tail;

            if (list->tail) {
                list->tail->next = tmp;
            }
            list->tail = tmp;

            if (list->head == NULL) {
                list->head = tmp;
            }
            list->index++;
        }             
        t1 = time(0); // ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ
        //printf("\nCreated doubly linked list: { ");
    }
    double time_in_seconds = difftime(t1, t0); // ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ
    printf("\nTime elapsed in sec: %f", time_in_seconds); // ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ
    Node* tmp = list->head;
    size_t i = 0;
    int len = list->index;

    while (tmp && i < len) {
        /*printf("%i ", tmp->data);*/
        tmp = tmp->next;
        i++;
    }
    printf("}");
    
    return tmp;
}


int main() {
    int Type;
    char *TypeName;

    DblLinkedList* list = CreateDLL();

    printf("1. Dynamic expandable array;\n2. A doubly linked list.\n\n");
    while (1) {
        printf("Choose an option: ");
        scanf("%i", &Type);
        if (Type == 1) {
            TypeName = "dynamic expandable array";
            break;
        }
        else if (Type == 2) {
            TypeName = "doubly linked list";
            break;
        }
    }

    int GenType, len = 0, size = 4, * a = (int*)malloc(size * sizeof(int)), ln, sz;
    printf("\n1. Empty %s;\n2. Generated %s.\n\n", TypeName, TypeName);
    while (1) {
        printf("Choose an %s option: ", TypeName);
        scanf("%i", &GenType);
        if (Type == 1) {
            if ((GenType != 1) && (GenType != 2)) {
                continue;
            }
            a = DEA(GenType, len, size, a, &ln, &sz);
            len = ln;
            size = sz;
            break;
        }
        else if (Type == 2) {        
            if ((GenType != 1) && (GenType != 2)) {
                continue;
            }
            DLL(GenType, list);
            break;
        }
    }

    PE();

    int Act, Trigger, secTrigger, msgp = 1, buf;

    while (1) {

        if (msgp == 1) {
            printf("\n1. Add an element to the beginning/middle/end of the %s;", TypeName);
            printf("\n2. Delete an element by index;");
            printf("\n3. Reading an element by index;");
            printf("\n4. Reading the first/last element of an %s;", TypeName);
            printf("\n5. Swap two elements (by index);");
            printf("\n6. Replacing an element (by index);");
            printf("\n7. Determine if an %s is empty;", TypeName);
            printf("\n8. Counting the length of an %s (number of elements); (WIP)", TypeName);
            printf("\n9. Complete %s cleanup;", TypeName);
            printf("\n0. Exit.\n");
            msgp = 0;
        }
        printf("\nChoose an action: ");
        scanf("%i", &Act);
        if (Act == 1) {
            int NewElem, k, elem;
            if ((Type == 1) && (len == 0) || (Type == 2) && (list == NULL)) {
                printf("\n1. Add to the end;");
            }
            else if ((Type == 1) && (len == 1) || (Type == 2) && (list->index == 1)) {
                printf("\n1. Add to the beginning;");
                printf("\n2. Add to the end;");
            }
            else {
                printf("\n1. Add to the beginning;");
                printf("\n2. Add to the middle;");
                printf("\n3. Add to the end;");
            }

            printf("\n0. Back.");
            while (1) {
                printf("\n\nChoose an action: ");
                scanf("%i", &Trigger);
                if ((Type == 1) || ((Type == 2) && (list != NULL))) {
                    if ((Trigger == 1) || (Trigger == 2) || (Trigger == 3) || (Trigger == 0)) break;
                }
                else {
                    if ((Trigger == 1) || (Trigger == 0)) break;
                }
                
            }

            if ((Type == 1) && (Trigger != 0)) {
                printf("\nEnter the length of the dynamic expandable array: ");
                scanf("%i", &k);

                for (int m = 0; m < k; m++) {
                    if (len == 0) {
                        a = (int*)realloc(a, size * sizeof(int));
                        
                        printf("\nEnter number: ");
                        scanf("%d", &NewElem);

                        a[len] = NewElem;
                        len++;

                        if (len == size) {
                            size *= 2;
                            a = (int*)realloc(a, size * sizeof(int));
                        }                        
                    }
                    else if (len == 1) {
                        if (Trigger == 1) {
                            printf("\nEnter number: ");
                            scanf("%d", &NewElem);

                            int j = len;
                            len++;

                            if (len == size) {
                                size *= 2;
                                a = (int*)realloc(a, size * sizeof(int));
                            }

                            for (int i = 0; i < len - 1; i++) {
                                a[j] = a[j - 1];
                                j--;
                            }

                            a[0] = NewElem;
                        }
                        else if (Trigger == 2) {
                            printf("\nEnter number: ");
                            scanf("%d", &NewElem);

                            a[len] = NewElem;
                            len++;

                            if (len == size) {
                                size *= 2;
                                a = (int*)realloc(a, size * sizeof(int));
                            }
                        }
                    } 
                    else {
                        if (Trigger == 1) {
                            printf("\nEnter number: ");
                            scanf("%d", &NewElem);

                            clock_t t;
                            t = clock();

                            int j = len;
                            len++;

                            if (len == size) {
                                size *= 2;
                                a = (int*)realloc(a, size * sizeof(int));
                            }

                            for (int i = 0; i < len - 1; i++) {
                                a[j] = a[j - 1];
                                j--;
                            }

                            a[0] = NewElem;

                            t = clock() - t;
                            printf("It took me %d clicks (%f seconds).\n", (int)t, ((double)t) / CLOCKS_PER_SEC);
                            system("pause");
                        }
                        else if (Trigger == 2) {
                            if ((len % 2 == 0) && (len >= 2)) {
                                printf("\nEnter number (a number will be entered between %i and %i): ", a[len / 2 - 1], a[len / 2]);
                            }
                            else if ((len % 2 == 1) && (len > 2)) {
                                printf("\nEnter number (a number will be entered between %i and %i): ", a[len / 2], a[len / 2 + 1]);
                            }
                            else if (len == 1) {
                                printf("\nEnter number (a number will be entered after %i): ", a[0]);
                            }
                            else {
                                printf("\nEnter number: ");
                            }

                            scanf("%d", &NewElem);

                            int j = len;
                            len++;

                            if (len == size) {
                                size *= 2;
                                a = (int*)realloc(a, size * sizeof(int));
                            }

                            for (int i = len / 2; i < len - 1; i++) {
                                a[j] = a[j - 1];
                                j--;
                            }

                            a[len / 2] = NewElem;
                        }
                        else if (Trigger == 3) {
                            printf("\nEnter number: ");
                            scanf("%d", &NewElem);

                            a[len] = NewElem;
                            len++;

                            if (len == size) {
                                size *= 2;
                                a = (int*)realloc(a, size * sizeof(int));
                            }
                        }
                    }

                    printf("New dynamic expandable array: { ");
                    for (int i = 0; i < len; i++) {
                        printf("%i ", a[i]);
                    }
                    printf("}");
                }
            }
            else if ((Type == 2) && (Trigger != 0)) {
                if (list == NULL) {
                    list = CreateDLL();

                    printf("\nEnter the length of the doubly linked list: ");
                    scanf("%i", &k);
                
                    for (int m = 0; m < k; m++) {
                        printf("Enter number: ");
                        scanf("%i", &elem);

                        Node* tmp = (Node*)malloc(sizeof(Node));
                        if (tmp == NULL) {
                            exit(1);
                        }

                        tmp->data = elem;
                        tmp->next = NULL;
                        tmp->prev = list->tail;

                        if (list->tail) {
                            list->tail->next = tmp;
                        }
                        list->tail = tmp;

                        if (list->head == NULL) {
                            list->head = tmp;
                        }
                        list->index++;
                    }

                    Node* tmp = list->head;
                    size_t i = 0;
                    int len = list->index;

                    printf("\nNew doubly linked list: { ");
                    while (tmp && i < len) {
                        printf("%i ", tmp->data);
                        tmp = tmp->next;
                        i++;
                    }
                    printf("}");
                }
                else if (list->index == 1) {
                    printf("\nEnter the length of the doubly linked list: ");
                    scanf("%i", &k);

                    if (Trigger == 1) {
                        for (int m = 0; m < k; m++) {
                            printf("Enter element: ");
                            scanf("%i", &elem);

                            Node* tmp = (Node*)malloc(sizeof(Node));
                            if (tmp == NULL) {
                                exit(1);
                            }

                            tmp->data = elem;
                            tmp->next = list->head;
                            tmp->prev = NULL;

                            if (list->head) {
                                list->head->prev = tmp;
                            }
                            list->head = tmp;

                            if (list->tail == NULL) {
                                list->tail = tmp;
                            }
                            list->index++;
                        }

                        Node* tmp = list->head;
                        size_t i = 0;
                        int len = list->index;

                        printf("\nNew doubly linked list: { ");
                        while (tmp && i < len) {
                            printf("%i ", tmp->data);
                            tmp = tmp->next;
                            i++;
                        }
                        printf("}");
                    }
                    else if (Trigger == 2) {
                        for (int m = 0; m < k; m++) {
                            printf("Enter number: ");
                            scanf("%i", &elem);

                            Node* tmp = (Node*)malloc(sizeof(Node));
                            if (tmp == NULL) {
                                exit(1);
                            }

                            tmp->data = elem;
                            tmp->next = NULL;
                            tmp->prev = list->tail;

                            if (list->tail) {
                                list->tail->next = tmp;
                            }
                            list->tail = tmp;

                            if (list->head == NULL) {
                                list->head = tmp;
                            }
                            list->index++;
                        }

                        Node* tmp = list->head;
                        size_t i = 0;
                        int len = list->index;

                        printf("\nNew doubly linked list: { ");
                        while (tmp && i < len) {
                            printf("%i ", tmp->data);
                            tmp = tmp->next;
                            i++;
                        }
                        printf("}");
                    }
                }
                else {
                    printf("\nEnter the length of the doubly linked list: ");
                    scanf("%i", &k);

                    if (Trigger == 1) {
                        for (int m = 0; m < k; m++) {
                            printf("Enter element: ");
                            scanf("%i", &elem);

                            Node* tmp = (Node*)malloc(sizeof(Node));
                            if (tmp == NULL) {
                                exit(1);
                            }

                            tmp->data = elem;
                            tmp->next = list->head;
                            tmp->prev = NULL;

                            if (list->head) {
                                list->head->prev = tmp;
                            }
                            list->head = tmp;

                            if (list->tail == NULL) {
                                list->tail = tmp;
                            }
                            list->index++;
                        }

                        Node* tmp = list->head;
                        size_t i = 0;
                        int len = list->index;

                        printf("\nNew doubly linked list: { ");
                        while (tmp && i < len) {
                            printf("%i ", tmp->data);
                            tmp = tmp->next;
                            i++;
                        }
                        printf("}");
                    }
                    else if (Trigger == 2) {
                        for (int m = 0; m < k; m++) {
                            int indexprev = list->index / 2 - 1;
                            Node* tempprev = list->head;
                            size_t i = 0;
                            while (tempprev && i < indexprev) {
                                tempprev = tempprev->next;
                                i++;
                            }
                            int indexnext = list->index / 2;
                            Node* tempnext = list->head;
                            i = 0;
                            while (tempnext && i < indexnext) {
                                tempnext = tempnext->next;
                                i++;
                            }
                            printf("\nEnter number (element will be enter between %i and %i): ", tempprev->data, tempnext->data);
                            scanf("%i", &elem);

                            size_t index = list->index / 2 - 1;
                            Node* elm = NULL;
                            Node* ins = NULL;

                            Node* temp = list->head;
                            i = 0;

                            while (temp && i < index) {
                                temp = temp->next;
                                i++;
                            }

                            elm = temp;
                            if (elm == NULL) {
                                exit(1);
                            }
                            ins = (Node*)malloc(sizeof(Node));
                            ins->data = elem;
                            ins->prev = elm;
                            ins->next = elm->next;
                            if (elm->next) {
                                elm->next->prev = ins;
                            }
                            elm->next = ins;

                            if (!elm->prev) {
                                list->head = elm;
                            }
                            if (!elm->next) {
                                list->tail = elm;
                            }

                            list->index++;

                            i = 0;
                            Node* tmp = list->head;
                            int len = list->index;

                            printf("New doubly linked list: { ");
                            while (tmp && i < len) {
                                printf("%i ", tmp->data);
                                tmp = tmp->next;
                                i++;
                            }
                            printf("}\n");
                        }
                    }
                    else if (Trigger == 3) {
                        for (int m = 0; m < k; m++) {
                            printf("Enter number: ");
                            scanf("%i", &elem);

                            Node* tmp = (Node*)malloc(sizeof(Node));
                            if (tmp == NULL) {
                                exit(1);
                            }

                            tmp->data = elem;
                            tmp->next = NULL;
                            tmp->prev = list->tail;

                            if (list->tail) {
                                list->tail->next = tmp;
                            }
                            list->tail = tmp;

                            if (list->head == NULL) {
                                list->head = tmp;
                            }
                            list->index++;
                        }

                        Node* tmp = list->head;
                        size_t i = 0;
                        int len = list->index;

                        printf("\nNew doubly linked list: { ");
                        while (tmp && i < len) {
                            printf("%i ", tmp->data);
                            tmp = tmp->next;
                            i++;
                        }
                        printf("}");
                    }
                }
            }

            msgp = 1;
            PE();
        }
        else if (Act == 2) {
            int index, j = 0;
            if (Type == 1) {
                if (len > 0) {

                    /*printf("\nCurrent dynamic expandable array:\n");
                    for (int i = 0; i < len; i++) {
                        printf("%i. %i\n", j++, a[i]);
                    }*/

                    while (1) {
                        printf("\nEnter a negative value to go back.\nEnter index: ");
                        scanf("%i", &index);
                        clock_t t0, t1; // ВРЕМЯ
                        t0 = time(0); // ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ
                        if ((index >= 0) && (len > 0) && (index < len)) {
                            for (index; index < len; index++) {
                                a[index] = a[index + 1];
                            }

                            len--;

                            if (len == size / 2 - 1) {
                                size /= 2;
                                a = (int*)realloc(a, size * sizeof(int));
                            }
                            t1 = time(0); // ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ
                            double time_in_seconds = difftime(t1, t0); // ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ
                            printf("\nTime elapsed in sec: %f", time_in_seconds); // ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ
                            /*printf("\nNew array: { ");
                            for (int i = 0; i < len; i++) {
                                printf("%i ", a[i]);
                            }
                            printf("}");*/

                            break;
                        }
                        else if (index < 0) {
                            break;
                        }
                    }

                    if (len == 0) {
                        a = '\0';
                        free(a);
                    }
                }
                else {
                    printf("\nA dynamic expandable array is empty.\n");
                }
            }
            else if ((Type == 2) && (list != NULL)) {
                size_t  i = 0;
                Node* tmp = list->head;
                int len = list->index;
                /*printf("\nCurrent doubly linked list:\n");
                while (tmp && i < len) {
                    printf("%i. %i\n", j++, tmp->data);
                    tmp = tmp->next;
                    i++;
                }*/

                while (1) {
                printf("\nEnter a negative value to go back.\nEnter index: ");
                scanf("%i", &index);

                clock_t t0, t1; // ВРЕМЯ
                t0 = time(0); // ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ
                if ((index >= 0) && (list != NULL) && (index < list->index)) {
                    Node* elm = NULL;
                    void* tmp = NULL;

                    Node* temp = list->head;
                    size_t i = 0;

                    while (temp && i < index) {
                        temp = temp->next;
                        i++;
                    }

                    elm = temp;

                    if (elm == NULL) {
                        exit(1);
                    }

                    if (elm->prev) {
                        elm->prev->next = elm->next;
                    }

                    if (elm->next) {
                        elm->next->prev = elm->prev;
                    }

                    tmp = elm->data;

                    if (!elm->prev) {
                        list->head = elm->next;
                    }

                    if (!elm->next) {
                        list->tail = elm->prev;
                    }

                    free(elm);

                    if (list->index == 1) {
                        Node* tmp = list->head;
                        Node* next = NULL;
                        while (tmp) {
                            next = tmp->next;
                            free(tmp);
                            tmp = next;
                        }
                        free(list);
                        list = NULL;

                        printf("\nNew doubly linked list: { }");

                        break;
                    }

                    list->index--;

                    i = 0;
                    Node* tmps = list->head;
                    int len = list->index;

                    t1 = time(0); // ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ
                    double time_in_seconds = difftime(t1, t0); // ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ
                    printf("\nTime elapsed in sec: %f", time_in_seconds); // ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ ВРЕМЯ
                    /*printf("\nNew doubly linked list: { ");
                    while (tmps && i < len) {
                        printf("%i ", tmps->data);
                        tmps = tmps->next;
                        i++;
                    }
                    printf("}\n");*/


                    break;
                    }
                    else if (index < 0) {
                        break;
                    }
                }
            }
            else {
                printf("\nA doubly linked list is empty.\n");
            }   

            msgp = 1;
            PE();
        }
        else if (Act == 3) {
            if (Type == 1) {
                if (len > 0) {
                    while (1) {
                        printf("\nEnter a negative value to go back.\nEnter the index of the element: ");
                        scanf("%d", &Trigger);

                        if (Trigger < 0) {
                            break;
                        }
                        else if (Trigger <= len - 1) {
                            printf("\n%i element: %i", Trigger, a[Trigger]);
                            break;
                        }
                        else {
                            printf("\nInvalid value! There are %i indexes in the dynamic expandable array.\n", len - 1);
                        }
                    }
                }
                else {
                    printf("\nA dynamic expandable array is empty.\n");
                }
            }
            else if ((Type == 2) && (list != NULL)) {
                while (1) {
                    printf("\nEnter a negative value to go back.\nEnter the index of the element: ");
                    scanf("%d", &Trigger);
                    if (Trigger < 0) {
                        break;
                    }
                    else if (Trigger < list->index / 2) {
                        Node* tmp = NULL;
                        size_t i = 0;

                        tmp = list->head;
                        while (tmp && i < Trigger) {
                            tmp = tmp->next;
                            i++;
                        }

                        printf("\n%i", tmp->data);
                        break;
                    }
                    else if ((Trigger >= list->index / 2) && (Trigger <= list->index - 1)) {
                        Node* tmp = NULL;
                        size_t i = list->index - 1;

                        tmp = list->tail;
                        while (tmp && i > Trigger) {
                            tmp = tmp->prev;
                            i--;
                        }

                        printf("\n%i", tmp->data);
                        break;
                    }
                    else {
                        printf("\nInvalid value! There are %i indexes in the doubly linked list.\n", list->index - 1);
                    }
                }
            }
            else {
                printf("\nA doubly linked list is empty.\n");
            }

            msgp = 1;
            PE();
        }
        else if (Act == 4) {
            if (Type == 1) {
                if (len > 0) {
                    printf("\n1. First element;\n2. Last element.\nEnter a negative value to go back.\n\nChoose an action: ");

                    while (1) {
                        scanf("%i", &Trigger);

                        if (Trigger < 0) {
                            break;
                        }
                        else if (Trigger == 1) {
                            printf("\nFirst element: %i", a[0]);
                            break;
                        }
                        else if (Trigger == 2) {
                            printf("\nLast element: %i", a[len - 1]);
                            break;
                        }
                    }
                }
                else {
                    printf("\nA dynamic expandable array is empty.\n");
                }
            }
            else if ((Type == 2) && (list != NULL)) {
                printf("\n1. First element;\n2. Last element.\nEnter a negative value to go back.\n\nChoose an action: ");

                while (1) {
                    scanf("%i", &Trigger);

                    if (Trigger < 0) {
                        break;
                    }
                    else if (Trigger == 1) {
                        Node* tmp = NULL;
                        size_t i = 0;

                        tmp = list->head;
                        while (tmp && i < 0) {
                            tmp = tmp->next;
                            i++;
                        }

                        printf("\nFirst element: %i", tmp->data);
                        break;
                    }
                    else if (Trigger == 2) {
                        Node* tmp = NULL;
                        size_t i = list->index - 1;

                        tmp = list->tail;
                        while (tmp && i > list->index) {
                            tmp = tmp->prev;
                            i--;
                        }

                        printf("\nLast element: %i", tmp->data);
                        break;
                    }
                }
            }
            else {
                printf("\nA doubly linked list is empty.\n");
            }         

            msgp = 1;
            PE();
        }
        else if (Act == 5) {
            if (Type == 1) {
                if (len > 0) {
                    while (1) {
                        printf("\nEnter a negative value to go back.\nIndex of the first element: ");
                        scanf("%i", &Trigger);
                        if (Trigger < 0) break;

                        printf("\nIndex of the second element: ");
                        scanf("%i", &secTrigger);
                        
                        if (Trigger >= len) {
                            printf("\nIndex of the first element is invalid!\n");
                            continue;
                        }
                        if (secTrigger >= len) {
                            printf("\nIndex of the second element is invalid!\n");
                            continue;
                        }

                        buf = a[Trigger];
                        a[Trigger] = a[secTrigger];
                        a[secTrigger] = buf;

                        printf("New array: { ");
                        for (int i = 0; i < len; i++) {
                            printf("%i ", a[i]);
                        }
                        printf("}");

                        break;
                    }
                }
                else {
                    printf("\nA dynamic expandable array is empty.\n");
                }                
            }
            else if ((Type == 2) && (list != NULL)) {
                while (1) {
                    printf("\n%i ", list->index);
                    printf("\nEnter a negative value to go back.\nIndex of the first element: ");
                    scanf("%i", &Trigger);
                    if (Trigger < 0) break;

                    printf("\nIndex of the second element: ");
                    scanf("%i", &secTrigger);

                    if (Trigger >= list->index) {
                        printf("\nIndex of the first element is invalid!\n");
                        continue;
                    }
                    if (secTrigger >= list->index) {
                        printf("\nIndex of the second element is invalid!\n");
                        continue;
                    }

                    size_t i = 0;
                    Node* tmpFIR = NULL;
                    Node* tmpSEC = NULL;

                    if (Trigger < list->index / 2) {
                        tmpFIR = list->head;

                        while (tmpFIR && i < Trigger) {
                            tmpFIR = tmpFIR->next;
                            i++;
                        }
                    }
                    else {
                        tmpFIR = list->tail;

                        while (tmpFIR && i < Trigger) {
                            tmpFIR = tmpFIR->prev;
                            i++;
                        }
                    }

                    i = 0;

                    if (secTrigger < list->index / 2) {
                        tmpSEC = list->head;

                        while (tmpSEC && i < Trigger) {
                            tmpSEC = tmpSEC->next;
                            i++;
                        }
                    }
                    else {
                        tmpSEC = list->tail;

                        while (tmpSEC && i < Trigger) {
                            tmpSEC = tmpSEC->prev;
                            i++;
                        }
                    }
                        
                    int buf = tmpFIR->data;
                    tmpFIR->data = tmpSEC->data;
                    tmpSEC->data = buf;

                    i = 0;
                    Node* tmp = list->head;
                    int len = list->index;

                    printf("New doubly linked list: { ");
                    while (tmp && i < len) {
                        printf("%i ", tmp->data);
                        tmp = tmp->next;
                        i++;
                    }
                    printf("}\n");

                    break;
                }
            }
            else {
                printf("\nA doubly linked list is empty.\n");
            }
                
            msgp = 1;
            PE();
        }
        else if (Act == 6) {
            if (Type == 1) {
                while (1) {
                    printf("\nEnter a negative value to go back.\nEnter the index of the element to replace: ");
                    scanf("%i", &Trigger);
                    if (Trigger < 0) break;
                    printf("\nEnter a new elmenent: ");
                    scanf("%i", &secTrigger);
                    if (Trigger < len) break;
                    if (Trigger >= len) {
                        printf("\nInvalid index!\n");
                    }
                }

                if (Trigger > 0) {
                    a[Trigger] = secTrigger;

                    printf("New dynamic expandable array: { ");
                    for (int i = 0; i < len; i++) {
                        printf("%i ", a[i]);
                    }
                    printf("}");
                }
            }
            else if ((Type == 2) && (list != NULL)) {
                while (1) {
                    printf("\nEnter a negative value to go back.\nIndex of the element: ");
                    scanf("%i", &Trigger);
                    if (Trigger < 0) break;

                    if (Trigger >= list->index) {
                        printf("\nIndex of the element is invalid!\n");
                        continue;
                    }

                    printf("\nEnter new number: ");
                    scanf("%i", &secTrigger);

                    Node* tmpElem = list->head;
                    size_t i = 0;

                    while (tmpElem && i < Trigger) {
                        tmpElem = tmpElem->next;
                        i++;
                    }

                    tmpElem->data = secTrigger;

                    i = 0;
                    Node* tmp = list->head;
                    int len = list->index;

                    printf("New doubly linked list: { ");
                    while (tmp && i < len) {
                        printf("%i ", tmp->data);
                        tmp = tmp->next;
                        i++;
                    }
                    printf("}\n");

                    break;
                }
            }
            else {
                printf("\nThe doubly linked list is not empty.");
            }

            msgp = 1;
            PE();
        }
        else if (Act == 7) {
            if ((Type == 1) && (a == NULL)) {
                printf("\nThe dynamic expandable array is empty.");
            }
            else if ((Type == 1) && (a != NULL)) {
                printf("\nThe dynamic expandable array is not empty.");
            }
            else if ((Type == 2) && (list == NULL)) {
                printf("\nThe doubly linked list is empty.");
            }
            else {
                printf("\nThe doubly linked list is not empty.");
            }

            msgp = 1;
            PE();
        }
        else if (Act == 8) {
            if (Type == 1) {
                printf("\nThe quantity of elements in the dynamic expandable array: %i", len);
            }
            else if ((Type == 2) && (list != NULL)) {
                Node* tmp = list->head;
                int i = 0;

                while (tmp) {
                    tmp = tmp->next;
                    i++;
                }

                printf("\nThe quantity of elements in the doubly linked list: %i", i);
            }
            else {
                printf("\nThe quantity of elements in the doubly linked list: 0");
            }

            msgp = 1;
            PE();
        }
        else if (Act == 9) {
            if ((Type == 1) && (len > 0)) {      
                a = '\0';
                free(a);
                len = 0;
                size = 4;
                printf("\nThe dynamic expandable array has been cleaned.");
            }
            else if ((Type == 1) && (len == 0)) {
                printf("\nA dynamic expandable array is empty.\n");
            }
            else if ((Type == 2) && (list != NULL)) {
                Node* tmp = list->head;
                Node* next = NULL;
                while (tmp) {
                    next = tmp->next;
                    free(tmp);
                    tmp = next;
                }
                free(list);
                list = NULL;
                printf("\nThe doubly linked list has been cleaned.");
            }
            else {
                printf("\nThe doubly linked list is empty.");
            }

            msgp = 1;
            PE();
        }
        else if (Act == 0) break;
    }

    return 0;
}