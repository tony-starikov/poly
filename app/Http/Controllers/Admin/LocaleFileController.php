<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;

class LocaleFileController extends Controller
{
    private $locale;
    private $key;
    private $value;
    private $path;
    private $arrayLang = array();

    //------------------------------------------------------------------------------
    // Add or modify lang files content
    //------------------------------------------------------------------------------

    public function menuEnEdit(Request $request)
    {
        App::setLocale('en');
        $this->locale = 'en';
        $this->arrayLang = Lang::get('main');
        $this->path = base_path().'/resources/lang/en/main.php';
        $this->key = $request->key;
        $this->value = $request->value;
        $this->arrayLang[$this->key] = $this->value;
        $this->save();

        return redirect()->route('menu.en.settings');
    }

    public function menuUaEdit(Request $request)
    {
        App::setLocale('ua');
        $this->locale = 'ua';
        $this->arrayLang = Lang::get('main');
        $this->path = base_path().'/resources/lang/ua/main.php';
        $this->key = $request->key;
        $this->value = $request->value;
        $this->arrayLang[$this->key] = $this->value;
        $this->save();

        return redirect()->route('menu.ua.settings');
    }

    public function menuRuEdit(Request $request)
    {
        App::setLocale('ru');
        $this->locale = 'ru';
        $this->arrayLang = Lang::get('main');
        $this->path = base_path().'/resources/lang/ru/main.php';
        $this->key = $request->key;
        $this->value = $request->value;
        $this->arrayLang[$this->key] = $this->value;
        $this->save();

        return redirect()->route('menu.ru.settings');
    }

    public function menuDeEdit(Request $request)
    {
        App::setLocale('de');
        $this->locale = 'de';
        $this->arrayLang = Lang::get('main');
        $this->path = base_path().'/resources/lang/de/main.php';
        $this->key = $request->key;
        $this->value = $request->value;
        $this->arrayLang[$this->key] = $this->value;
        $this->save();

        return redirect()->route('menu.de.settings');
    }

    //------------------------------------------------------------------------------
    // Read lang file content
    //------------------------------------------------------------------------------

    public function readEn()
    {
        App::setLocale('en');
        $this->path = base_path().'/resources/lang/en/main.php';
        $items = $this->arrayLang = Lang::get('main');
        return view('admin.menu_en', compact('items'));
    }

    //------------------------------------------------------------------------------
    // Read lang file content
    //------------------------------------------------------------------------------

    public function readUa()
    {
        App::setLocale('ua');
        $items = Lang::get('main');
        return view('admin.menu_ua', compact('items'));
    }

    //------------------------------------------------------------------------------
    // Read lang file content
    //------------------------------------------------------------------------------

    public function readRu()
    {
        App::setLocale('ru');
        $items = Lang::get('main');
        return view('admin.menu_ru', compact('items'));
    }

    //------------------------------------------------------------------------------
    // Read lang file content
    //------------------------------------------------------------------------------

    public function readDe()
    {
        App::setLocale('de');
        $items = Lang::get('main');
        return view('admin.menu_de', compact('items'));
    }

    //------------------------------------------------------------------------------
    // Save lang file content
    //------------------------------------------------------------------------------

    private function save()
    {
        $content = "<?php\n\nreturn\n[\n";

        foreach ($this->arrayLang as $this->key => $this->value)
        {
            $content .= "\t'".$this->key."' => '".$this->value."',\n";
        }

        $content .= "];";

        file_put_contents($this->path, $content);

        $this->arrayLang = array();
    }

}
