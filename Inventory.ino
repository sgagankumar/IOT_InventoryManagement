#include <ESP8266WiFi.h>
#include <SPI.h>
#include "MFRC522.h"
#include <Arduino.h>
#include <ESP8266WiFiMulti.h>
#include <ESP8266HTTPClient.h>


ESP8266WiFiMulti WiFiMulti;


constexpr uint8_t RST_PIN = 0;         
constexpr uint8_t SS_PIN = 2;         // Configurable, see typical pin layout above
const int buzzer =  4;
String rfid="";

MFRC522 mfrc522(SS_PIN, RST_PIN);  // Create MFRC522 instance

void setup() { pinMode(buzzer, OUTPUT); 
     Serial.begin(115200);    // Initialize serial communications
     delay(250);

        
   
    WiFiMulti.addAP("tequedlabs", "tequed123");


  Serial.println(F("Booting...."));
  
  SPI.begin();           // Init SPI bus
  mfrc522.PCD_Init();    // Init MFRC522
  
   
  Serial.println(F("Ready!"));
  Serial.println(F("======================================================")); 
  Serial.println(F("Scan for Card and print UID:"));
}

void loop() {

  String url="http://192.168.43.205/tequedlabs_project1/inventory_loc.php/?location=StorageArea1&rfid=";

         // Look for new cards
   if ( ! mfrc522.PICC_IsNewCardPresent()) {
      delay(50);
      return;
     }
     
      // Select one of the cards
    if ( ! mfrc522.PICC_ReadCardSerial()) {
    delay(50);
    return;
     }

     
     // Show some details of the PICC (that is: the tag/card)
     Serial.print(F("Card UID:"));

    for (byte i = 0; i < mfrc522.uid.size; i++) {
    Serial.print(mfrc522.uid.uidByte[i] < 0x10 ? " 0" : " ");
    Serial.print(mfrc522.uid.uidByte[i], HEX);
    rfid+=String(mfrc522.uid.uidByte[i],HEX);
}}
