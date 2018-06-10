<?php
namespace DevOp\Core;

class DotEnv
{

    /**
     * @var array
     */
    private $env;

    /**
     * @param string $env
     * @return $this
     * @throws \RuntimeException
     */
    public function load($env = '.env')
    {

        if (!file_exists($env)) {
            throw new \RuntimeException("Invalid ENV file or file is not readable");
        }

        $content = file_get_contents($env);
        $values = explode("\n", str_replace(array("\r\n", "\n\r", "\r"), "\n", $content));

        foreach ($values AS $value) {
            $this->parse($value);
        }

        return $this;
    }

    private function parse($values)
    {
        if (empty($values)) {
            return;
        }
        
        list($key, $value) = explode('=', $values);

        if (empty($value)) {
            $parse = '';
        } else if (in_array($value, ['true', 'false'])) {
            $parse = $value === 'true';
        } else if ($value === 'null') {
            $parse = null;
        } else if (in_array(substr($value, 0, 1), ['"', "'"])) {
            $parse = substr($value, 1, -1);
        } else {
            $parse = $value;
        }

        $this->env[$key] = $parse;
    }

    /**
     * @return $this
     */
    public function toEnv()
    {
        foreach ($this->env AS $key => $value) {
            $_ENV[$key] = $value;
            putenv("$key=$value");
        }

        return $this;
    }
}
