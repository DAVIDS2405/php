<?php

namespace app\session;

use app\interface\RepositoryInterface;

class Session implements RepositoryInterface
{

    public function __construct()
    {
        session_start();
        if (!isset($_SESSION["beers"])) {
            $_SESSION["beers"] = [];
        }
    }

    public function get(): array
    {
        return $_SESSION["beers"];
    }

    public function create($data)
    {
        $beers = $_SESSION["beers"];
        if (count($beers) == 0) {
            $data['id'] = 1;
        } else {
            $lastElement = $beers[count($beers) - 1];
            $data['id'] = ((int)$lastElement["id"]) + 1;
        }
        array_push($beers, $data);
        $_SESSION["beers"] = $beers;
    }

    public function update($data)
    {
        $beers = $_SESSION["beers"];
        foreach ($beers as $key => $beer) {
            if ($beer["id"] == $data["id"]) {
                $beers[$key] = $data;
                break;
            }
        }
        $_SESSION["beers"] = $beers;
    }

    public function delete(int $id)
    {
        $beers = $_SESSION["beers"];
        foreach ($beers as $key => $beer) {
            if ($beer["id"] == $id) {
                unset($beers[$key]);
                $beers = array_values($beers);
                $_SESSION["beers"] = $beers;
                break;
            }
        }
    }

    public function exists($id): bool
    {
        $beers = $_SESSION["beers"];

        foreach ($beers as $beer) {
            if ($beer["id"] == $id) {
                return true;
            }
        }

        return false;
    }
}
