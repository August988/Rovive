<?php

// redirect the page to /catalog/ but keep the query string
header("Location: /catalog_page?" . $_SERVER['QUERY_STRING']);