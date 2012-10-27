<?php
/**
 * TL_ROOT/system/modules/tags/languages/cs/tl_module.php 
 * 
 * Contao extension: tags 3.0.0 stable 
 * Czech translation file 
 * 
 * Copyright : &copy; Helmut Schottmüller 
 * License   : GNU Lesser Public License (LGPL) 
 * Author    : Helmut Schottmüller (hschottm), http://www.aurealis.de 
 * Translator: Tomas Petrlik (frogzone), www.frogzone.cz 
 * 
 * This file was created automatically be the Contao extension repository translation module.
 * Do not edit this file manually. Contact the author or translator for this module to establish 
 * permanent text corrections which are update-safe. 
 */
 
$GLOBALS['TL_LANG']['tl_module']['tag_jumpTo']['0'] = "Přesměrovat na stránku";
$GLOBALS['TL_LANG']['tl_module']['tag_jumpTo']['1'] = "Zvolte prosím stránku, na níž má být návštěvník přesměrován po kliknutí na příslušný odkaz.";
$GLOBALS['TL_LANG']['tl_module']['tag_forTable']['0'] = "Tag tabulky";
$GLOBALS['TL_LANG']['tl_module']['tag_forTable']['1'] = "Vyberte tabulky, které jsou používané pro tagy. Tato volba je platná pouze tehdy, pokud používáte předdefinované <em>tl_tag</em> tabulky pro uložení tagů.";
$GLOBALS['TL_LANG']['tl_module']['tag_tagtable']['0'] = "Tag zdrojová tabulka";
$GLOBALS['TL_LANG']['tl_module']['tag_tagtable']['1'] = "Zadejte název zdrojové tabulky, ve které lze nalézt tagy. Toto pole výchozí předdefinované <em>tl_tag</em>.";
$GLOBALS['TL_LANG']['tl_module']['tag_tagfield']['0'] = "Tag pole tabulky";
$GLOBALS['TL_LANG']['tl_module']['tag_tagfield']['1'] = "Zadejte název pole tabulky, ve kterém lze nalézt tagy. Toto pole výchozí na předdefinované pole <em>tag</em>.";
$GLOBALS['TL_LANG']['tl_module']['tag_filter']['0'] = "Tag filtr";
$GLOBALS['TL_LANG']['tl_module']['tag_filter']['1'] = "Zadejte prosím čárkou oddělený seznam tagů, které se mají filtrovat na výstupu modulu.";
$GLOBALS['TL_LANG']['tl_module']['tag_maxtags']['0'] = "Maximální počet tagů";
$GLOBALS['TL_LANG']['tl_module']['tag_maxtags']['1'] = "Zadejte maximální počet tagů pro Tag Cloud. Pokud je více tagů, než je maximální počet tagů, nebudou tagy s nejmenším počtem hitů zobrazeny. Pokud nezadáte hodnotu nebo hodnotu 0, všechny značky se zobrazí.";
$GLOBALS['TL_LANG']['tl_module']['tag_buckets']['0'] = "Maximální počet velikostí tagů";
$GLOBALS['TL_LANG']['tl_module']['tag_buckets']['1'] = "Zadejte maximální počet velikostí tagů pro Tag Cloud. Každá skupina tagů má svou vlastní třídu CSS size1, size2, size3 ... size<em>X</em>.";
$GLOBALS['TL_LANG']['tl_module']['tag_named_class']['0'] = "Přidat tag jako CSS třídu";
$GLOBALS['TL_LANG']['tl_module']['tag_named_class']['1'] = "Přidá název tagu jako CSS třídu pro každý tag. Použijte tento zvláštní název třídy pro další styling tagů prostřednictvím CSS. Mezery v názvu tagu budou nahrazeny podtržítky.";
$GLOBALS['TL_LANG']['tl_module']['tag_on_page_class']['0'] = "Tag aktuální stránka";
$GLOBALS['TL_LANG']['tl_module']['tag_on_page_class']['1'] = "Přidá další CSS třídy ('here') pro každou značku, která byla přiřazena na aktuální stránku.";
$GLOBALS['TL_LANG']['tl_module']['tag_topten']['0'] = "Oblíbené tagy";
$GLOBALS['TL_LANG']['tl_module']['tag_topten']['1'] = "Zobrazit oblíbené tagy nad všechny tagy.";
$GLOBALS['TL_LANG']['tl_module']['tag_topten_expanded']['0'] = "Rozbalit oblíbené";
$GLOBALS['TL_LANG']['tl_module']['tag_topten_expanded']['1'] = "Rozbalit oblíbené tagy. Tagy v tomto mraku jsou viditelné.";
$GLOBALS['TL_LANG']['tl_module']['tag_all_expanded']['0'] = "Rozbalit všechny tagy";
$GLOBALS['TL_LANG']['tl_module']['tag_all_expanded']['1'] = "Rozbalit všechny tagy. Tagy v tomto mraku jsou viditelné.";
$GLOBALS['TL_LANG']['tl_module']['tag_related']['0'] = "Zobrazit související tagy";
$GLOBALS['TL_LANG']['tl_module']['tag_related']['1'] = "Zobrazit všechny související tagy k vybranému tagu.";
$GLOBALS['TL_LANG']['tl_module']['news_showtags']['0'] = "Zobrazit tagy novinek";
$GLOBALS['TL_LANG']['tl_module']['news_showtags']['1'] = "Zobrazit všechny tagy přiřazené pod každou položkou novinek. Toto funguje pouze pokud používáte šablony novinek s tagy, např. news_full_tags.";
$GLOBALS['TL_LANG']['tl_module']['tag_ignore']['0'] = "Ignorovat tagy";
$GLOBALS['TL_LANG']['tl_module']['tag_ignore']['1'] = "Tímto modulem ignorovat tag souvisejících činností (např. zobrazit pouze novinky ukazující daný tag).";
$GLOBALS['TL_LANG']['tl_module']['keep_url_params']['0'] = "Zachovat URL parametry";
$GLOBALS['TL_LANG']['tl_module']['keep_url_params']['1'] = "Zachovat zvláštní Contao URL parametry (např. datové parametry nových archivů) v odkazech tagů";
$GLOBALS['TL_LANG']['tl_module']['objecttype']['0'] = "Typ objektu";
$GLOBALS['TL_LANG']['tl_module']['objecttype']['1'] = "Zvolte typ objektu, který by měl být uveden v tomto seznamu.";
$GLOBALS['TL_LANG']['tl_module']['tagsource']['0'] = "Zdroj tagů";
$GLOBALS['TL_LANG']['tl_module']['tagsource']['1'] = "Vyberte tabulku, která se používá k vytvoření seznamu tagů pro tento modul.";
$GLOBALS['TL_LANG']['tl_module']['pagesource']['0'] = "Stránky";
$GLOBALS['TL_LANG']['tl_module']['pagesource']['1'] = "Vyberte stránky, které jsou použity k sestavení seznamu objektů. Vyberete-li na stránku, která obsahuje podstránek, všechny podstránky se používá příliš.";
$GLOBALS['TL_LANG']['tl_module']['articlelist_template']['0'] = "Seznam článků šablona";
$GLOBALS['TL_LANG']['tl_module']['articlelist_template']['1'] = "Zde si můžete vybrat šablonu pro seznam článků.";
$GLOBALS['TL_LANG']['tl_module']['cloud_template']['0'] = "Tag cloud šablona";
$GLOBALS['TL_LANG']['tl_module']['cloud_template']['1'] = "Zde si můžete vybrat šablonu pro Tag Cloud.";
$GLOBALS['TL_LANG']['tl_module']['scope_template']['0'] = "Šablonu rozsahu tagu";
$GLOBALS['TL_LANG']['tl_module']['scope_template']['1'] = "Zde si můžete vybrat šablonu rozsahu tagu.";
$GLOBALS['TL_LANG']['tl_module']['clear_text']['0'] = "Nadpis rozsahu tagu";
$GLOBALS['TL_LANG']['tl_module']['clear_text']['1'] = "Zadejte prosím nadpis rozsahu tagu. Nadpis je hypertextový odkaz, který vyčistí tag rozsahu a odstraní všechny vybrané značky.";
$GLOBALS['TL_LANG']['tl_module']['show_empty_scope']['0'] = "Zobrazit prázdný tag rozsahu";
$GLOBALS['TL_LANG']['tl_module']['show_empty_scope']['1'] = "Zobrazit tag rozsahu, i když nejsou k dispozici žádné aktivní tagy.";
$GLOBALS['TL_LANG']['tl_module']['tag_show_reset']['0'] = "Zobrazit odstranit všechny tagy";
$GLOBALS['TL_LANG']['tl_module']['tag_show_reset']['1'] = "Zobrazit hypertextový odkaz odstranit všechny vybrané značky.";
$GLOBALS['TL_LANG']['tl_module']['hide_on_empty']['0'] = "Pouze filtrovaný výstup";
$GLOBALS['TL_LANG']['tl_module']['hide_on_empty']['1'] = "Globální seznam článků vždy vyžaduje jeden nebo více tagů, aby mohl vytvořit filtrovaný výstup. Bez filtru, se ukáže prázdný seznam.";
$GLOBALS['TL_LANG']['tl_module']['tag_alltags'] = "Všechny tagy";
$GLOBALS['TL_LANG']['tl_module']['tag_relatedtags'] = "Související tagy";
$GLOBALS['TL_LANG']['tl_module']['tl_content'] = "Prvky obsahu";
$GLOBALS['TL_LANG']['tl_module']['tl_article'] = "Články";
$GLOBALS['TL_LANG']['tl_module']['tl_news'] = "Nový články";
$GLOBALS['TL_LANG']['tl_module']['tag_clear_tags'] = "Vymazat vybrané tagy";
$GLOBALS['TL_LANG']['tl_module']['tl_calendar_events'] = "Události";
$GLOBALS['TL_LANG']['tl_module']['tl_page'] = "Stránky";
$GLOBALS['TL_LANG']['tl_module']['tags'] = "Tagy";
$GLOBALS['TL_LANG']['tl_module']['showtags_legend'] = "Nastavení tagů";
$GLOBALS['TL_LANG']['tl_module']['tagscope_legend'] = "Tag nastavení rozsahu";
$GLOBALS['TL_LANG']['tl_module']['size_legend'] = "Počet a velikost nastavení";
$GLOBALS['TL_LANG']['tl_module']['tagextension_legend'] = "Další tag seznamy";
$GLOBALS['TL_LANG']['tl_module']['datasource_legend'] = "Zdroj dat nastavení";
$GLOBALS['TL_LANG']['tl_module']['object_selection_legend'] = "Typy objektu";
 
?>
