<?php

namespace App\Repositories\System;

use App\Interfaces\System\TranslationInterface;
use App\Model\Language;
use App\Model\Locale;
use App\Repositories\Repository;

class TranslationRepository extends Repository implements TranslationInterface
{
  public function __construct(private readonly Locale $locale)
  {
    parent::__construct($locale);
  }

  public function getAllData($data, $selectedColumns = [], $pagination = true)
  {
    $query = $this->query();
    if (isset($data->keyword) && $data->keyword !== null) {
      $query->where('key', 'ILIKE', '%' . $data->keyword . '%');
    }
    if (count($selectedColumns) > 0) {
      $query->select($selectedColumns);
    }
    if ($pagination) {
      return $query->orderBy('id', 'DESC')->paginate(PAGINATE);
    }

    return $query->orderBy('id', 'DESC')->get();
  }
  public function create($request)
  {
    $key = strtolower(trim(str_replace('.', '', $request->key)));
    if ($key !== '') {
      $check = $this->model::where('key', $key)->first();
      if (!isset($check)) {
        return $this->model::create([
          'key' => $key,
          'text' => $this->inserttext($key),
        ]);
      }
    } else {
      return true;
    }
  }
  public function inserttext($content)
  {
    $languages = Language::pluck('language_code');
    $text = [];
    foreach ($languages as $language) {
      $text[$language] = $content;
    }

    return $text;
  }

  public function update($request, $data)
  {
    return  $data->update(['text' => $data]);
  }

  public function delete($request, $id)
  {
    $item = $this->itemByIdentifier($id);
    return $item->delete();
  }
}
