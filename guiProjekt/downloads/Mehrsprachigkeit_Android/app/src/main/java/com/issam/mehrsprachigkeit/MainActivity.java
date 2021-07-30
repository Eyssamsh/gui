package com.issam.mehrsprachigkeit;

import androidx.appcompat.app.ActionBar;
import androidx.appcompat.app.AppCompatActivity;
import java.util.Locale;

import android.content.res.Resources;
import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.content.res.Configuration;

import android.content.SharedPreferences;

import android.util.DisplayMetrics;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import java.util.Locale;

public class MainActivity extends AppCompatActivity {

    Button deutsch,marokkanisch;
    TextView first_text,secont_text;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        setContentView(R.layout.activity_main);

        ActionBar actionBar = getSupportActionBar();
        actionBar.setTitle(getResources().getString(R.string.app_name));

        first_text = findViewById(R.id.willkomen_text);
        secont_text = findViewById(R.id.wtext);
        deutsch = findViewById(R.id.btn_deutsch);
        marokkanisch = findViewById(R.id.btn_marokkanisch);

        deutsch.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                changeLanguage("de");
            }
        });

        marokkanisch.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                changeLanguage("ar");
            }
        });


    }
    public void changeLanguage(String language) {

        if (language == "ar") {
            Toast.makeText(getApplicationContext(), "ARABISCH", Toast.LENGTH_LONG).show();
            setLocale("ar");

        }
        if (language == "de") {
            Toast.makeText(getApplicationContext(), "DEUTSCH", Toast.LENGTH_LONG).show();
            setLocale("de");

        }
    }

    public void setLocale(String lang) {
        Locale myLocale = new Locale(lang);
        Resources res = getResources();
        DisplayMetrics dm = res.getDisplayMetrics();
        Configuration conf = res.getConfiguration();
        conf.locale = myLocale;
        res.updateConfiguration(conf, dm);
        Intent refresh = new Intent(this, MainActivity.class);
        finish();
        startActivity(refresh);
    }



/*
        Locale locale=new Locale(language);
        Locale.setDefault(locale);
        Configuration configuration = new Configuration();
        configuration.locale =locale;
        getApplicationContext().getResources().updateConfiguration(configuration,getApplicationContext().getResources().getDisplayMetrics());

        // Update Views
        first_text.setText(getString(R.string.welcome_msg));
        first_text.setText(getString(R.string.msg));


    }
*/

    /*
    private void setLocale(String lang){
        Locale locale=new Locale(lang);
        Locale.setDefault(locale);
        Configuration configuration = new Configuration();
        configuration.locale =locale;
        getApplicationContext().getResources().updateConfiguration(configuration, getApplicationContext().getResources().getDisplayMetrics());

        SharedPreferences.Editor editor = getSharedPreferences("Settings",MODE_PRIVATE).edit();
        editor.putString("My_Lang",lang);
        editor.apply();
    }
    public void loadLocale(){
        SharedPreferences prefs = getSharedPreferences("Settings", Activity.MODE_PRIVATE);
        String language = prefs.getString("My_Lang","");
        setLocale(language);
    }
    */

}