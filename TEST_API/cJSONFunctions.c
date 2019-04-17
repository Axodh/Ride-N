#include <stdio.h>
#include <string.h>
#include <curl/curl.h>
#include <windows.h>
#include "cJSON.h"
#include "functions.h"
#include "curlFunctions.h"
#include "cJSONFunctions.h"

void cJSONInit(char* buffer) {
    cJSON *name = NULL;
    cJSON *period = NULL;
    cJSON *address = NULL;
    cJSON *town = NULL;
    cJSON *website = NULL;
    cJSON *number = NULL;
    cJSON *offDays = NULL;
    cJSON *iter = NULL;
    cJSON *fields = NULL;

    cJSON *object = cJSON_Parse(buffer);
    cJSON *records = cJSON_GetObjectItemCaseSensitive(object, "records");

    if(records != NULL) {
        cJSON_ArrayForEach(iter, records) {
            fields = cJSON_GetObjectItemCaseSensitive(iter, "fields");

            if(fields != NULL) {
                name = cJSON_GetObjectItemCaseSensitive(fields, "nom_du_musee");
                period = cJSON_GetObjectItemCaseSensitive(fields,"periode_ouverture");
                address = cJSON_GetObjectItemCaseSensitive(fields, "adr");
                town = cJSON_GetObjectItemCaseSensitive(fields, "ville");
                website = cJSON_GetObjectItemCaseSensitive(fields, "sitweb");
                number = cJSON_GetObjectItemCaseSensitive(fields, "telephone1");
                offDays = cJSON_GetObjectItemCaseSensitive(fields, "fermeture_annuelle");

                /* Verifie si les champs sont des string et ne sont pas NULL */
                if(name==NULL) {
                    printf("Name     : NaN\n");
                } else if(name->valuestring != NULL && cJSON_IsString(name))       printf("Name     : %s\n", name->valuestring);

                if(period==NULL) {
                    printf("Open     : NaN\n");
                } else if(period->valuestring != NULL && cJSON_IsString(period))   printf("Open     : %s\n", period->valuestring);

                if(address==NULL) {
                    printf("Address  : NaN\n");
                } else if(address->valuestring != NULL && cJSON_IsString(address)) printf("Address  : %s\n", address->valuestring);

                if(town==NULL) {
                    printf("Town     : NaN\n");
                } else if(town->valuestring != NULL && cJSON_IsString(town))       printf("Town     : %s\n", town->valuestring);

                if(website==NULL) {
                    printf("Website  : NaN\n");
                } else if(website->valuestring != NULL && cJSON_IsString(website)) printf("Site     : %s\n", website->valuestring);

                if(number==NULL) {
                    printf("Number   : NaN\n");
                } else if(number->valuestring != NULL && cJSON_IsString(number))   printf("Number   : %s\n", number->valuestring);

                if(offDays==NULL) {
                    printf("Days OFF : NaN\n\n");
                } else if(offDays->valuestring != NULL && cJSON_IsString(offDays)) printf("Days off : %s\n\n", offDays->valuestring);
            } else coolExit("Error, no museum in the city specified!", NULL);
        }
    } else printf("Records is NULL!\n");
    cJSON_Delete(object);
}
