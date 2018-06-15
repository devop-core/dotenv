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

        $this->env[$key] = $value;
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
