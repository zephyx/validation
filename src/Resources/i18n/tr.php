<?php

declare(strict_types=1);

return [
    'and' => 've',
    'or'  => 'veya',

    'rule.default'                  => ':attribute geçerli değil',
    'rule.accepted'                 => ':attribute şunlardan biri olmalıdır: :accepted',
    'rule.after'                    => ':attribute şu tarihten sonra bir tarih olmalıdır: :time',
    'rule.alpha'                    => ':attribute sadece alfabetik karakterlere izin verir',
    'rule.alpha_dash'               => ':attribute sadece a-z, 0-9, _ ve - karakterlerine izin verir',
    'rule.alpha_num'                => ':attribute sadece alfabetik ve sayısal karakterlere izin verir',
    'rule.alpha_spaces'             => ':attribute sadece alfabetik karakterleri ve boşlukları içerebilir',
    'rule.any_of'                   => ':attribute içindeki her değer şunlardan biri olmalıdır: :allowed_values',
    'rule.array'                    => ':attribute bir dizi olmalıdır',
    'rule.array_must_have_keys'     => ':attribute şu anahtarları belirtmelidir: :keys',
    'rule.array_can_only_have_keys' => ':attribute sadece şu anahtarlara sahip olmalıdır: :keys',
    'rule.before'                   => ':attribute şu tarihten önce bir tarih olmalıdır: :time',
    'rule.between'                  => ':attribute :min ve :max arasında olmalıdır',
    'rule.boolean'                  => ':attribute bir boole değeri olmalıdır',
    'rule.date'                     => ':attribute geçerli bir tarih formatı değildir',
    'rule.default_value'            => ':attribute varsayılan değeri :default',
    'rule.different'                => ':attribute :field alanından farklı olmalıdır',
    'rule.digits'                   => ':attribute sayısal olmalı ve tam olarak :length uzunluğunda olmalıdır',
    'rule.digits_between'           => ':attribute sayısal olmalı ve uzunluğu :min ile :max arasında olmalıdır',
    'rule.email'                    => ':attribute geçerli bir e-posta adresi değildir',
    'rule.ends_with'                => ':attribute şu değerle bitmelidir: :compare_with',
    'rule.exists'                   => ':attribute mevcut bir kayıtla eşleşmelidir',
    'rule.extension'                => ':attribute bir :allowed_extensions dosyası olmalıdır',
    'rule.float'                    => ':attribute bir ondalık sayı olmalıdır',
    'rule.in'                       => ':attribute şunlardan biri olmalıdır: :allowed_values',
    'rule.integer'                  => ':attribute bir tam sayı olmalıdır',
    'rule.ip'                       => ':attribute geçerli bir IP adresi olmalıdır',
    'rule.ipv4'                     => ':attribute geçerli bir IPv4 adresi olmalıdır',
    'rule.ipv6'                     => ':attribute geçerli bir IPv6 adresi olmalıdır',
    'rule.json'                     => ':attribute geçerli bir JSON dizesi olmalıdır',
    'rule.length'                   => ':attribute tam olarak :length karakter uzunluğunda bir dize olmalıdır',
    'rule.lowercase'                => ':attribute küçük harf olmalıdır',
    'rule.max'                      => ':attribute maksimum :max olmalıdır',
    'rule.mimes'                    => ':attribute dosya türü :allowed_types olmalıdır',
    'rule.min'                      => ':attribute minimum :min olmalıdır',
    'rule.not_in'                   => ':attribute şunlardan biri olmamalıdır: :disallowed_values',
    'rule.numeric'                  => ':attribute sayısal olmalıdır',
    'rule.phone_number'             => ':attribute geçerli bir E.164 telefon numarası değildir',
    'rule.present'                  => ':attribute bulunmalıdır',
    'rule.prohibited'               => ':attribute izin verilmez',
    'rule.prohibited_if'            => ':attribute izin verilmez eğer :field değeri :values ise',
    'rule.prohibited_unless'        => ':attribute izin verilmez eğer :field değeri :values içermiyorsa',
//    'rule.prohibited_with'          => ':attribute :fields ile izin verilmez',
//    'rule.prohibited_with_all'      => ':attribute :fields\'ın tümü ile izin verilmez',
//    'rule.prohibited_with_all'      => 'Aşağıdaki tüm alanlar mevcut olduğunda :attribute alanı yasaktır: :fields',
//    'rule.prohibited_with_all'      => 'Aşağıdaki alanların tümü olmadığında :attribute alanı yasaktır: :fields',
    'rule.regex'                    => ':attribute gerekli formata uymaz',
    'rule.rejected'                 => ':attribute şunlardan biri olmalıdır: :rejected',
    'rule.required'                 => ':attribute zorunludur',
    'rule.required_if'              => ':attribute :field değeri :values ise zorunludur',
    'rule.required_unless'          => ':attribute :fields şu değerlerden birine sahip değilse zorunludur: :values',
    'rule.required_with'            => ':attribute şu alanlarla birlikte zorunludur: :fields',
    'rule.required_with_all'        => ':attribute şu alanlarla birlikte zorunludur: :fields',
    'rule.required_without'         => ':attribute şu alanlar boş olduğunda zorunludur: :fields',
    'rule.required_without_all'     => ':attribute şu alanlar boş olduğunda zorunludur: :fields',
    'rule.same'                     => ':attribute :field ile aynı olmalıdır',
    'rule.starts_with'              => ':attribute şu değerle başlamalıdır: :compare_with',
    'rule.string'                   => ':attribute bir dize olmalıdır',
    'rule.unique'                   => ':attribute benzersiz olmalıdır, :value zaten mevcut',
    'rule.uploaded_file'            => ':attribute geçerli bir yüklenmiş dosya değildir',
    'rule.uploaded_file.min_size'   => ':attribute dosyası çok küçük, minimum boyutu :min_size',
    'rule.uploaded_file.max_size'   => ':attribute dosyası çok büyük, maksimum boyutu :max_size',
    'rule.uploaded_file.type'       => ':attribute dosya türü :allowed_types olmalıdır',
    'rule.uppercase'                => ':attribute büyük harf olmalıdır',
    'rule.url'                      => ':attribute geçerli bir URL değildir',
    'rule.uuid'                     => ':attribute geçerli bir UUID veya NIL değildir',
];
