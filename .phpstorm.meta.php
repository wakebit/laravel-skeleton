<?php

namespace PHPSTORM_META {
    override(\Psr\Container\ContainerInterface::get(0), map([
        '' => '@',
    ]));

    override(\Illuminate\Foundation\Application::make(0), map([
        '' => '@',
    ]));

    override(\Illuminate\Container\Container::get(0), map([
        '' => '@',
    ]));
}
