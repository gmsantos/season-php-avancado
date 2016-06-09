<?php 

$conteudo = '
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam metus, sagittis pharetra massa ac, placerat facilisis neque. Suspendisse in nulla accumsan, laoreet diam non, posuere ligula. Vestibulum id quam blandit, suscipit arcu at, blandit dolor. Donec tincidunt convallis ipsum, sit amet scelerisque ipsum posuere at. Suspendisse id ultricies diam. Mauris pellentesque facilisis dui, ac pharetra ante ornare non. Pellentesque semper mollis rutrum. Etiam massa turpis, porta eget eros vitae, sagittis rhoncus tortor. Nulla tincidunt vel neque in ultricies. Suspendisse volutpat, mi quis rutrum elementum, massa magna mattis lorem, eget dictum libero purus et nunc. Maecenas pharetra enim sed risus maximus commodo.

Nunc vitae vehicula ex. Integer ut volutpat sapien. Praesent quis hendrerit elit. Nam molestie placerat gravida. Morbi ut lectus ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed consectetur est ut elit aliquet, sodales malesuada enim posuere. Duis placerat dui scelerisque, convallis orci a, interdum elit. Nulla eget urna vitae diam venenatis rutrum eu non leo. Curabitur posuere magna interdum risus pharetra laoreet.

Curabitur est massa, luctus at dui quis, pulvinar mattis dui. Donec et feugiat mi, et aliquet mi. Mauris sollicitudin, orci et vestibulum semper, metus sem dictum risus, et bibendum ipsum sapien non felis. Nulla accumsan velit at quam venenatis iaculis. Integer in semper risus. Nulla at aliquam purus. Duis commodo ex maximus quam cursus ornare. Praesent pretium enim in mollis hendrerit. Mauris consequat vitae libero eu ornare.

Mauris accumsan lorem at dolor vehicula, et efficitur velit molestie. Phasellus mi nisi, dictum aliquet purus quis, tristique molestie leo. Donec pharetra eros enim, a gravida purus faucibus eget. Fusce at risus porttitor, faucibus ligula a, auctor ante. Suspendisse faucibus sagittis tortor, et molestie neque bibendum in. Morbi nisi ligula, ornare a pulvinar vel, consectetur varius nisl. Etiam rhoncus imperdiet urna, sed luctus mauris tristique ut. Sed gravida tortor nec venenatis sagittis. Quisque sed orci et massa commodo venenatis sed in metus. Fusce ullamcorper posuere odio, cursus dictum lectus iaculis nec. Integer sit amet tristique magna, ut eleifend tellus. Suspendisse posuere hendrerit lectus, a aliquam tortor ultrices ac. Fusce vulputate egestas bibendum. Duis tristique, nisi sed hendrerit cursus, libero metus mattis arcu, nec pharetra tortor nisi quis massa.

';

$eTag = md5($conteudo);

if (isset($_SERVER['HTTP_IF_NONE_MATCH'])) {
    $match = $_SERVER['HTTP_IF_NONE_MATCH'];
} else {
    $match = '';
}

if ($match == $eTag) {
    header('304 Not modified', true, 304);
    exit;
}

header("ETag: $eTag");

echo $conteudo;