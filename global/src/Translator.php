<?php

class Translator
{
    private static $translations;
    private static $app;

    public function __construct($languageFile = 'en_US.json')
    {
        self::loadTranslations($languageFile);
    }

    public static function loadTranslations($languageFile)
    {
        self::$app = new Module();
        $filePath = self::$app->path() . "/storage/languages/" . $languageFile;

        if (file_exists($filePath)) {
            $jsonContent = file_get_contents($filePath);
            self::$translations = json_decode($jsonContent, true);
        } else {
            throw new Exception("Language file not found: $languageFile");
        }
    }

    public static function translate($key)
    {
        $keys = explode('.', $key);
        $translated = self::$translations;

        foreach ($keys as $nestedKey) {
            if (isset($translated[$nestedKey])) {
                $translated = $translated[$nestedKey];
            } else {
                return "Translation not found for key: $key";
            }
        }

        return $translated;
    }
}

// // Exemplo de uso
// $translator = new Translator('en_US.json');

// // Exemplo de tradução
// echo $translator->translate('LOGIN.LOGIN'); // Saída: login
// echo $translator->translate('LOGIN.ACCESS'); // Saída: access
