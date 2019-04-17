#include <stdio.h>
#include <curl/curl.h>
#include <windows.h>
#include "cJSON.h"
#include "functions.h"
#include "curlFunctions.h"
#include "cJSONFunctions.h"

int main(int argc, char **argv) {
    char url[150] = {BASE_URL_API};

    //menu(0);
    recupUrl(url);
    curlInit(url);
    printf("end\n");

    return EXIT_SUCCESS;
}


