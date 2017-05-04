<?php

/**
 * Created by PhpStorm.
 * User: hui
 * Date: 02.05.2017
 * Time: 20:53
 */
trait BuildFormsJSON
{



    /**
     *  Генерирует формы для удаления
     *  определенного количества посто в зависимоти
     *  от номера текущей страницы и количества постов
     *  помещающихся на одной странице.
     *
     *  Тоесть высчитывется диапозон удаляемых постов
     *  и на каждый пост этого диапазона генерируется форма.
     *
     * @param $template_name - шаблон по которому будут сгенерированы формы
     * @param $delete_route
     * @param $currentPage - номер страницы
     * @param $limit - кол-во постов на одной страници
     * @param bool $inverse - порядок следавония элементов . true - от большего к меньшему.
     * @return array
     */
    protected function createDeleteFormJSON($template_name,
                                            $delete_route,
                                            $currentPage = self::CURRENT_PAGE,
                                            $limit = self::LIMIT,
                                            $inverse = true)
    {
        $firstDeleteNumber = $limit * $currentPage == 0 ?: 1;
        $lastDeleteNumber = $firstDeleteNumber + $limit;
        $deleteForms = [];

        for ($i = $firstDeleteNumber; $i <= $lastDeleteNumber; $i++) {

            /** @var \Symfony\Bundle\FrameworkBundle\Controller\Controller $this */
            $deleteForms[] = $this->get('templating')->render($template_name,
                ['form' => $this->createFormBuilder()
                    ->setAction($this->generateUrl($delete_route, ['id' => $i]))
                    ->setMethod('DELETE')
                    ->getForm()
                    ->createView()]);

        }

        return $inverse ? array_reverse($deleteForms) : $deleteForms;
    }
}