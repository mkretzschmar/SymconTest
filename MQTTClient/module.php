<?
    // Klassendefinition
    class MQTTClient extends IPSModule {
        /**
        * Die folgenden Funktionen stehen automatisch zur Verf�gung, wenn das Modul �ber die "Module Control" eingef�gt wurden.
        * Die Funktionen werden, mit dem selbst eingerichteten Prefix, in PHP und JSON-RPC wiefolgt zur Verf�gung gestellt:
        *
        * MQT_Publish($id);
        *
        */
        public function Publish() {
            echo $this->InstanceID;
        }
    }
?>