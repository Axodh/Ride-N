#include <stdio.h>
#include <string.h>
#include <curl/curl.h>
#include <windows.h>
#include "cJSON.h"
#include "functions.h"
#include "curlFunctions.h"
#include "cJSONFunctions.h"

void curlInit(char url[150]) {
    CURL* curl = curl_easy_init();
    FILE* file = NULL;
    char* buffer = NULL;

    if(curl) {
        /* WRITE */
        file = fopen("data.json", "w");
        fileVerif(file);

        /* STOCK DATA.JSON */
        curlBase(url, curl, file);

        printf("\nFile written, the result is in 'data.json'.\n");
        system("pause");

        /* READ/MODIFY */
        file = freopen("data.json", "r+", file);
        fileVerif(file);

        /* BUFFER */
        buffer = setBuffer(file, buffer);
        fclose(file);

        /* cJSON */
        if(buffer != NULL) cJSONInit(buffer);
        else coolExit("BUFFER IS NULL", NULL);

        curl_easy_cleanup(curl);
    }
}

void curlBase(char url[150], CURL* curl, FILE* file) {
    CURLcode res;

    curl_easy_setopt(curl, CURLOPT_URL, url); /* Setup cURL */
    curl_easy_setopt(curl, CURLOPT_SSL_VERIFYPEER, FALSE); /* Bypass SSL verification */
    curl_easy_setopt(curl, CURLOPT_WRITEDATA, file); /*  Write the result in a file */
    res = curl_easy_perform(curl); /* Error code */

    /* Check for errors */
    if(res != CURLE_OK) {
        fprintf(stderr, "curl_easy_perform() failed: %s\n", curl_easy_strerror(res));
        exit(res);
    } fclose(file);
}
