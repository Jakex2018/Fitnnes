SELECT no_ruti,no_ejer FROM tipo_ru INNER JOIN ta_ejer ON tipo_ru.id_ruti=ta_ejer.id_ejer INNER JOIN re_curu ON tipo_ru.id_ruti=re_curu.fk_idd5


SELECT fk_idd5,fk_id01 FROM re_curu INNER JOIN tipo_ru ON re_curu.fk_idd5=tipo_ru.id_ruti INNER JOIN ta_ejer ON re_curu.fk_id01=ta_ejer.id_ejer