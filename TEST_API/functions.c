#include <stdio.h>
#include <string.h>
#include <curl/curl.h>
#include <windows.h>
#include "cJSON.h"
#include "functions.h"
#include "curlFunctions.h"
#include "cJSONFunctions.h"

/* Gestion du menu */
void menu(int type) {
    FILE* menu = NULL;
    int choice = 0;
    char line[SIZE_MAX] = "";

    clear();
    if (!type) menu = fopen("menu0.conf", "r");
    if (type)  menu = fopen("menu1.conf", "r");
    fileVerif(menu);

    while(fgets(line, SIZE_MAX, menu) != NULL)
        printf("%s", line);
    fclose(menu);

    scanf("%d", &choice);
    menuS(type, choice);
    fflush(stdin);
}

/* Choix du menu */
void menuS(int type, int choice) {
    if(choice!=0 && choice!=1) menu(type);
    if(choice) exit(EXIT_SUCCESS);
    if(!type && !choice) menu(1);
}

/* Verifie si le fichier est correctement ouvert */
void fileVerif(FILE* file) {
    if(file == NULL) coolExit("ERROR OPENING FILE", NULL);
}

/* Colle l'url */
void recupUrl(char url[150]) {
    char name[50];

    clear();
    printf("Enter a city name : ");
    fgets(name, 50, stdin);
    strcat(url, name);
    strcat(url, END_URL_API);
    url[strcspn(url,"\n")] = '&';
}

/* Gestion du buffer */
char* setBuffer(FILE* file, char* buffer) {
    long length = 0;

    fseek(file, 0, SEEK_END);
    length = ftell(file);
    fseek(file, 0, SEEK_SET);
    buffer = malloc(length);

    if(buffer != NULL) {
        fread(buffer, 1, length, file);
        replaceUnicode(buffer, length);
        return buffer;
    } else coolExit("BUFFER IS NOT ALLOCATED CORRECTLY", buffer);
    return buffer;
}

/* Remplace l'unicode dans le fichier */
void replaceUnicode(char* buffer, long length) {
    int i, count=0;

    printf("\nLength : %li.\n", length);
    printf("\nWith unicode : \n%s\n", buffer);

    for(i=0; i < length; i++){
        if(buffer[i]==92) {
            if(buffer[CHAR_REF]=='u') {
                if(buffer[FIRST_N]=='0') {
                    if(buffer[THIRD_N]=='c' && buffer[LAST_N]=='e') replaceChar(buffer, i, 'I', length);
                    else if(buffer[THIRD_N]=='e' && buffer[LAST_N]=='0') replaceChar(buffer, i, 'a', length);
                    else if(buffer[THIRD_N]=='e' && buffer[LAST_N]=='7') replaceChar(buffer, i, 'c', length);
                    else if(buffer[THIRD_N]=='e' && buffer[LAST_N]=='8') replaceChar(buffer, i, 'e', length);
                    else if(buffer[THIRD_N]=='e' && buffer[LAST_N]=='9') replaceChar(buffer, i, 'e', length);
                    else if(buffer[THIRD_N]=='e' && buffer[LAST_N]=='b') replaceChar(buffer, i, 'e', length);
                    else if(buffer[THIRD_N]=='f' && buffer[LAST_N]=='4') replaceChar(buffer, i, 'o', length);
                    else if(buffer[THIRD_N]=='f' && buffer[LAST_N]=='b') replaceChar(buffer, i, 'u', length);
                    count++;
                } else if(buffer[FIRST_N]=='2') replaceChar(buffer, i, ' ', length);
            } else if(buffer[CHAR_REF]=='n') {
                buffer[i]=',';
                buffer[i+1]=' ';
            }
        }
    }

    printf("\nWithout unicode : \n%s\n", buffer);
    printf("\nNeed to suppr strings : %d\n\n", count);
}

/* Remplace le charactère unicode par son équivalent en utf-8 */
void replaceChar(char* buffer, int i, char sub, long length) {
    int j;

    buffer[i]=sub;
    for(i++; i<length-5; i++) {
        j = i+5;
        buffer[i]=buffer[j];
    }
}

/* Sort du programme en fermant le buffer éventuellement */
void coolExit(char* errorName, char* buffer) {
    perror(errorName);
    printf("\nerror\n");
    free(buffer);
    exit(EXIT_FAILURE);
}
