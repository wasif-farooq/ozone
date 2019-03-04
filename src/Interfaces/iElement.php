<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 2/24/19
 * Time: 1:55 PM
 */
namespace Ozone\ThemeOptions\Interfaces;

/**
 * Interface iElement
 * @package Ozone\Plugin\Interface
 */
interface iElement
{
    /**
     * This function is used to render element html that
     * will implement all the elements
     * @return string
     */
    public function render(): string;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @return array
     */
    public function getAttributes(): array;

    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name): void;

    /**
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void;

    /**
     * @param array $attributes
     * @return void
     */
    public function setAttributes(array $attributes): void;
}