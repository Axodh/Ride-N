#ifndef     FUNCTIONS_H_INCLUDED
#define     FUNCTIONS_H_INCLUDED

#define     clear()         system("cls");
#define     BASE_URL_API    "https://data.culture.gouv.fr/api/records/1.0/search/?dataset=liste-et-localisation-des-musees-de-france&q="
#define     END_URL_API     "rows=100"
#define     SIZE_MAX        1000
#define     CHAR_REF        i+1
#define     FIRST_N         i+2
#define     SECOND_N        i+3
#define     THIRD_N         i+4
#define     LAST_N          i+5

void menu(int);
void menuS(int, int);
void fileVerif(FILE*);
void recupUrl(char[150]);
char* setBuffer(FILE*, char*);
void replaceUnicode(char*, long);
void replaceChar(char* buffer, int i, char sub, long length);
void coolExit(char*, char*);

#endif // FUNCTIONS_H_INCLUDED
